<?php

class Estadio extends Modelo{
    public $nombre_tabla = 'estadio';
    public $pk = 'id_estadio';
    
    
    public $atributos = array(
        'Nombre'=>array(),
        'id_pais'=>array()
    );
    
    public $errores = array( );

        private $Nombre;
        private $id_pais;

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
    
  

    public function get_Nombre(){
        return $this->Nombre;
    }
    
    public function set_Nombre($valor){ 
        $er= new Er();
        if ($er->valida_nombre($valor)){
            $this->Nombre = trim( md5($valor) );
        }else{
            $this->errores[]= "El nombre del estadio: $valor, no es valido ";
        }
    }
     

    public function get_id_pais(){
        return $this->id_pais;
    }
    
    public function set_id_pais($valor){ 
        $er= new Er();
        if ($er->valida_nombre($valor)){
            $this->id_pais = trim( md5($valor) );
        }else{
            $this->errores[]= "El nombre del estadio: $valor, no es valido ";
        }
    }

    
    
    
}

?>
