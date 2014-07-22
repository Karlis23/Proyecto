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
        $er= new Er();
        if ($er->valida_nombre($valor)){
            $this->nombre = trim( $valor );
        }else{
            $this->errores[]= "El nombre de equipo : $valor no es valido";
        }
    }

    

    public function get_id_pais(){
        return $this->id_pais;
    }
    
    public function set_id_pais($valor){
        $er= new Er();
        if ($er->valida_numero($valor)){
            $this->id_pais = trim( $valor );
        }else{
            $this->errores[]= "El id pais: $valor, no es valido ";
        }
    }



    public function get_escudo(){
        return $this->escudo;
    }
    
    public function set_escudo($valor){

        $er = new Er();
        if ( !$er->valida_imagen_name($valor['name']) ){
            $this->errores[] = 'Formato de imagen no es valido ('.$valor["name"].').';
        }
        if ( !$er->valida_imagen_type($valor['type']) ){
            $this->errores[] = 'Formato de imagen no es valido ('.$valor["type"].').';
        }
        if ( $valor['size']>10000000){
            $this->errores[] = 'Tamaño de imagen ('.$valor["size"].'). Sobrepasa el tamaño maximo';
        }
        //trim simplemente quita espacios al principio y final de la cadena
        $this->escudo = trim($valor['name']);
    }    
    
}

?>
