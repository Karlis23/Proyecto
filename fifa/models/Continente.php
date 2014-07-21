<?php


class continente extends Modelo{
    public $nombre_tabla = 'continente';
    public $pk = 'id_continente';
    
    
    public $atributos = array(
        'nombre'=>array()
    );
    
    public $errores = array( );
    
    
        private $nombre;   

    function integrantes(){
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
            $this->errores[]= "El nombre de integrante : $valor no es valido"
        }
    }

   
    


    
    
    
}

?>
