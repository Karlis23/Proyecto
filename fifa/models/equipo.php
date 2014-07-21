<?php

class Equipo extends Modelo{
    public $nombre_tabla = 'equipo';
    public $pk = 'id_equipo';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'id_pais'=>array(),
        'escudo'=>array()
    );
    
    public $errores = array( );

        private $nombre;
        private $id_pais;
        private $escudo;

    function Equipo(){
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
 $this->nombre = trim( $valor );
        $er= new Er();
        if ($er->valida_nombre($valor)){
            
        }else{
            $this->errores[]= "El nombre: $valor, no es valido ";
        }
    }

    

    public function get_id_pais(){
        return $this->id_pais;
    }
    
    public function set_id_pais($valor){
        $er= new Er();
        if ($er->valida_numeros($valor)){
            $this->id_pais = trim( $valor );
        }else{
            $this->errores[]= "El nombre: $valor, no es valido ";
        }
    }



    public function get_escudo(){
        return $this->escudo;
    }
    
    public function set_escudo($valor){
        $er= new Er();
        if ($er->valida_imagen($valor)){
            $this->escudo = trim( $valor );
        }else{
            $this->errores[]= "El nombre: $valor, no es valido ";
        }
    }

    


    
    
    
}

?>
