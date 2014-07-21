<?php

class Posicion extends Modelo{
    public $nombre_tabla = 'posicion';
    public $pk = 'id_posicion';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'abreviatura'=>array()
    );
    
    public $errores = array( );

        private $nombre;
        private $abreviatura;

    function Posicion(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
  

    public function get_nombre(){
        return $this->nombre;
    }
    
    public function set_nombre($valor){
        $er= new Er();
        if ($er->valida_nombre($valor)){
            $this->nombre = trim( md5($valor) );
        }else{
            $this->errores[]= "El nombre de posicion: $valor, no es valido ";
        }
    }

    

    public function get_abreviatura(){
        return $this->abreviatura;
    }
    
    public function set_abreviatura($valor){
        $er= new Er();
        if ($er->valida_abreviatura($valor)){
            $this->abreviatura = trim( md5($valor) );
        }else{
            $this->errores[]= "La abreviatura de posicion: $valor, no es valido ";
        }
    }

    


    
    
    
}

?>
