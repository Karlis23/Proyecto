<?php


class Pais extends Modelo{
    public $nombre_tabla = 'pais';
    public $pk = 'id_pais';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'bandera'=>array(),
        'id_continente'=>array()
    );
    
    public $errores = array( );
    
    
        private $nombre;   
        private $bandera;   
        private $id_continente;   

    function Pais(){
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
            $this->errores[]= "El nombre de integrante : $valor no es valido";
        }
    }

     public function get_bandera(){
        return $this->bandera;
    }
    
    public function set_bandera($valor){
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
        $this->bandera = trim($valor['name']);

    }

     public function get_id_continente(){
        return $this->id_continente;
    }
    
    public function set_id_continente($valor){
        $er= new Er();
        if ($er->valida_numero($valor)){
            $this->id_continente = trim( $valor );
        }else{
            $this->errores[]= "El nombre de integrante : $valor no es valido";
        }
    }

   
    


    
    
    
}

?>
