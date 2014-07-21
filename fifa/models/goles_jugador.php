<?php

class Goles_Jugador extends Modelo{
    public $nombre_tabla = 'goles_jugador';
    public $pk = 'id_goles_jugador';
    
    
    public $atributos = array(
        'minuto_gol'=>array(),
        'id_juego'=>array(),
        'id_jugador'=>array()
    );
    
    public $errores = array( );

        private $minuto_gol;
        private $id_juego;
        private $id_jugador;

    function Usuario(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
  

    public function get_minuto_gol(){
        return $this->minuto_gol;
    }
    
    public function set_minuto_gol($valor){ 
        $er= new Er();
        if ($er->valida_numeros($valor)){
            $this->minuto_gol = trim( md5($valor) );
        }else{
            $this->errores[]= "El nombre del estadio: $valor, no es valido ";
        }
    }
    public function get_id_juego(){
        return $this->id_juego;
    }
    
    public function set_id_juego($valor){ 
        $er= new Er();
        if ($er->valida_numeros($valor)){
            $this->id_juego = trim( md5($valor) );
        }else{
            $this->errores[]= "El nombre del estadio: $valor, no es valido ";
        }
    }
    public function get_id_jugador(){
        return $this->id_jugador;
    }
    
    public function set_id_jugador($valor){ 
        $er= new Er();
        if ($er->valida_numeros($valor)){
            $this->id_jugador = trim( md5($valor) );
        }else{
            $this->errores[]= "El nombre del estadio: $valor, no es valido ";
        }
    }

   

    
    
    
}

?>
