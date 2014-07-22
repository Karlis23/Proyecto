<?php

class tarjetas_jugador extends Modelo{
    public $nombre_tabla = 'tarjetas_jugador';
    public $pk = 'id_tarjetajugador';
    
    
    public $atributos = array(
        'minuto_tarjeta'=>array(),
        'id_juego'=>array(),
        'id_jugador'=>array(),
        'tipo_tarjeta'=>array()
    );
    
    public $errores = array( );

        private $minuto_tarjeta;
        private $id_juego;
        private $id_jugador;
        private $tipo_tarjeta;

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
    
  

    public function get_minuto_tarjeta(){
        return $this->minuto_tarjeta;
    }
    
    public function set_minuto_tarjeta($valor){ 
        $er= new Er();
        if ($er->valida_numeros($valor)){
            $this->minuto_tarjeta = trim( md5($valor) );
        }else{
            $this->errores[]= "El minuto : $valor, no es valido ";
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
            $this->errores[]= "El juego: $valor, no es valido ";
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
            $this->errores[]= "El jugador: $valor, no es valido ";
        }
    }
    public function get_tipo_tarjeta(){
        return $this->tipo_tarjeta;
    }
    
    public function set_tipo_tarjeta($valor){ 
        $er= new Er();
        if ($er->valida_nombre($valor)){
            $this->tipo_tarjeta = trim( md5($valor) );
        }else{
            $this->errores[]= "El tipo de tarjeta: $valor, no es valido ";
        }
    }

   

    
    
    
}

?>
