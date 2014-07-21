<?php

class jugador extends Modelo{
    public $nombre_tabla = 'jugador';
    public $pk = 'id_jugador';
    
    
    public $atributos = array(
        'numero'=>array(),
        'id_integrante'=>array(),
        'id_posicion'=>array(),
    );
    
    public $errores = array( );

        private $numero;
        private $id_integrante;
        private $id_posicion;

    function jugador(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
  

    public function get_numero(){
        return $this->numero;
    }
    
    public function set_numero($valor){
        $er= new Er();
        if ($er->valida_numeros($valor)){
            $this->numero = trim( md5($valor) );
        }else{
            $this->errores[]= "El nombre del estadio: $valor, no es valido ";
        }
    }

    public function get_id_integrante(){
        return $this->id_integrante;
    }
    
    public function set_id_integrante($valor){
        $er= new Er();
        if ($er->valida_numeros($valor)){
            $this->id_integrante = trim( md5($valor) );
        }else{
            $this->errores[]= "El nombre del estadio: $valor, no es valido ";
        }
    }

    public function get_id_posicion(){
        return $this->id_posicion;
    }
    
    public function set_id_posicion($valor){
        $er= new Er();
        if ($er->valida_numeros($valor)){
            $this->id_posicion = trim( md5($valor) );
        }else{
            $this->errores[]= "El nombre del estadio: $valor, no es valido ";
        }
    }


    
    
    
}

?>
