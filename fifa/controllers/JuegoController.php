<?php
  class JuegoController extends Juego {
    
    public $muestra_errores = false;
    function __construct(){
      parent::Juego();
    }
    
    public function insertaJuego($datos){
      /*echo "<pre>datos:";
      print_r($datos);
        echo "</pre>";*/
      //$continente = new Continente();
      $this->set_fecha($datos['fecha']);
      $this->set_id_equipolocal($datos['id_equipolocal']);
      $this->set_id_equipovisitante($datos['id_equipovisitante']);
      $this->set_id_estadio($datos['id_estadio']);
      $this->set_goles_Local($datos['goles_Local']);
      $this->set_goles_visitante($datos['goles_visitante']);

      
      if (count($this->errores)>0) {
        //print_r($status->errores);
        //die();
        $this->muestra_errores = true;
      }
      else {

      $this->inserta($this->get_atributos());
      header("location:../site/inicio.php");
      }

    }

  }


?>