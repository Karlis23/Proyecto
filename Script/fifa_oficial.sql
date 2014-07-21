SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `fifa_oficial` DEFAULT CHARACTER SET utf8 ;
USE `fifa_oficial` ;

-- -----------------------------------------------------
-- Table `fifa_oficial`.`continente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fifa_oficial`.`continente` (
  `id_continente` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id_continente`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `fifa_oficial`.`integrante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fifa_oficial`.`integrante` (
  `id_integrante` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL DEFAULT NULL,
  `apellido` VARCHAR(100) NULL DEFAULT NULL,
  `peso` FLOAT NULL DEFAULT NULL,
  `estatura` FLOAT NULL DEFAULT NULL,
  `foto` VARCHAR(50) NULL DEFAULT NULL,
  `edad` INT(11) NULL DEFAULT NULL,
  `id_equipo` INT(11) NOT NULL,
  PRIMARY KEY (`id_integrante`),
  INDEX `fkIntegrante_idx` (`id_equipo` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8
COMMENT = ' ';


-- -----------------------------------------------------
-- Table `fifa_oficial`.`pais`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fifa_oficial`.`pais` (
  `id_pais` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NULL DEFAULT NULL,
  `bandera` VARCHAR(45) NULL DEFAULT NULL,
  `id_continente` INT(11) NOT NULL,
  PRIMARY KEY (`id_pais`),
  INDEX `fkContinente_idx` (`id_continente` ASC),
  CONSTRAINT `fkPais`
    FOREIGN KEY (`id_continente`)
    REFERENCES `fifa_oficial`.`continente` (`id_continente`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `fifa_oficial`.`entrenador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fifa_oficial`.`entrenador` (
  `id_entrenador` INT(11) NOT NULL AUTO_INCREMENT,
  `id_pais` INT(11) NOT NULL,
  `id_integrante` INT(11) NOT NULL,
  PRIMARY KEY (`id_entrenador`),
  INDEX `FKEntrenadorIntegrante` (`id_integrante` ASC),
  INDEX `FKEntrenadorPais` (`id_pais` ASC),
  CONSTRAINT `FKEntrenadorIntegrante`
    FOREIGN KEY (`id_integrante`)
    REFERENCES `fifa_oficial`.`integrante` (`id_integrante`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FKEntrenadorPais`
    FOREIGN KEY (`id_pais`)
    REFERENCES `fifa_oficial`.`pais` (`id_pais`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `fifa_oficial`.`equipo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fifa_oficial`.`equipo` (
  `id_equipo` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL DEFAULT NULL,
  `id_pais` INT(11) NOT NULL,
  `escudo` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id_equipo`),
  INDEX `fk1Pais_idx` (`id_pais` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `fifa_oficial`.`estadio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fifa_oficial`.`estadio` (
  `id_estadio` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL DEFAULT NULL,
  `id_pais` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_estadio`),
  INDEX `FKEstadioPais_idx` (`id_pais` ASC),
  CONSTRAINT `FKEstadioPais`
    FOREIGN KEY (`id_pais`)
    REFERENCES `fifa_oficial`.`pais` (`id_pais`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `fifa_oficial`.`posision`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fifa_oficial`.`posicion` (
  `id_posicion` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NULL DEFAULT NULL,
  `abreviatura` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id_posicion`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `fifa_oficial`.`jugador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fifa_oficial`.`jugador` (
  `id_jugador` INT(11) NOT NULL AUTO_INCREMENT,
  `numero` INT(11) NULL DEFAULT NULL,
  `idi_ntegrante` INT(11) NOT NULL,
  `id_posicion` INT(11) NOT NULL,
  PRIMARY KEY (`id_jugador`),
  INDEX `fk2Jugador_idx` (`id_posicion` ASC),
  INDEX `fk3Jugador` (`idi_ntegrante` ASC),
  CONSTRAINT `fk2Jugador`
    FOREIGN KEY (`id_posicion`)
    REFERENCES `fifa_oficial`.`posicion` (`id_posicion`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk3Jugador`
    FOREIGN KEY (`idi_ntegrante`)
    REFERENCES `fifa_oficial`.`integrante` (`id_integrante`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `fifa_oficial`.`juego`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fifa_oficial`.`juego` (
  `id_juego` INT(11) NOT NULL AUTO_INCREMENT,
  `fecha` DATETIME NULL DEFAULT NULL,
  `id_equipolocal` INT(11) NOT NULL,
  `id_equipovisitante` INT(11) NOT NULL,
  `id_estadio` INT(11) NOT NULL,
  `goles_Local` INT(11) NULL DEFAULT NULL,
  `goles_visitante` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_juego`),
  INDEX `fk1Juego_idx` (`id_estadio` ASC),
  INDEX `fk2Juego_idx` (`id_equipolocal` ASC),
  INDEX `fk3Juego_idx` (`id_equipovisitante` ASC),
  CONSTRAINT `fk1Juego`
    FOREIGN KEY (`id_estadio`)
    REFERENCES `fifa_oficial`.`estadio` (`id_estadio`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk2Juego`
    FOREIGN KEY (`id_equipolocal`)
    REFERENCES `fifa_oficial`.`equipo` (`id_equipo`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk3Juego`
    FOREIGN KEY (`id_equipovisitante`)
    REFERENCES `fifa_oficial`.`equipo` (`id_equipo`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COMMENT = ' ';


-- -----------------------------------------------------
-- Table `fifa_oficial`.`goles_jugador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fifa_oficial`.`goles_jugador` (
  `minuto_gol` TIME NOT NULL,
  `id_juego` INT(11) NOT NULL,
  `id_jugador` INT(11) NOT NULL,
  `id_goles_jugador` INT(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_goles_jugador`),
  INDEX `fk_resultado_1_idx` (`id_juego` ASC),
  INDEX `fk_golesJugador_1_idx` (`id_jugador` ASC),
  CONSTRAINT `fk_golesJugador_1`
    FOREIGN KEY (`id_jugador`)
    REFERENCES `fifa_oficial`.`jugador` (`id_jugador`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_resultado_1`
    FOREIGN KEY (`id_juego`)
    REFERENCES `fifa_oficial`.`juego` (`id_juego`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `fifa_oficial`.`tarjetas_jugador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fifa_oficial`.`tarjetas_jugador` (
  `id_tarjetajugador` INT(11) NOT NULL AUTO_INCREMENT,
  `minuto_tarjeta` TIME NOT NULL,
  `id_juego` INT(11) NOT NULL,
  `id_jugador` INT(11) NOT NULL,
  `tipo_tarjeta` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id_tarjetajugador`),
  INDEX `fk_resultado_1_idx` (`id_juego` ASC),
  INDEX `fk_golesJugador_1_idx` (`id_jugador` ASC),
  CONSTRAINT `fk_golesJugador_10`
    FOREIGN KEY (`id_jugador`)
    REFERENCES `fifa_oficial`.`jugador` (`id_jugador`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_resultado_10`
    FOREIGN KEY (`id_juego`)
    REFERENCES `fifa_oficial`.`juego` (`id_juego`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `fifa_oficial`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fifa_oficial`.`usuario` (
  `id_usuario` INT(11) NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(200) NULL DEFAULT NULL,
  `password` VARCHAR(100) NULL DEFAULT NULL,
  `rol` VARCHAR(10) NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
