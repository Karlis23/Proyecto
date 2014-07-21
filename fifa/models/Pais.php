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
            $this->errores[]= "El nombre de integrante : $valor no es valido";
        }
    }

     public function get_bandera(){
        return $this->bandera;
    }
    
    public function set_bandera($valor){
        $er= new Er();
        if ($er->valida_imagen($valor)){
            $this->bandera = trim( $valor );
        }else{
            $this->errores[]= "La bandera : $valor no es valido";
        }
    }

     public function get_id_continente(){
        return $this->id_continente;
    }
    
    public function set_id_continente($valor){
        $er= new Er();
        if ($er->valida_numeros($valor)){
            $this->id_continente = trim( $valor );
        }else{
            $this->errores[]= "El nombre de integrante : $valor no es valido";
        }
    }

   
    


    
    
    
}

?>
