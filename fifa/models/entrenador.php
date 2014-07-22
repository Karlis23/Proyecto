<?php

class Entrenador extends Modelo{
    public $nombre_tabla = 'entrenador';
    public $pk = 'id_entrenador';
    
    
    public $atributos = array(
        'id_pais'=>array(),
        'id_integrante'=>array()
    );
    
    public $errores = array( );

        private $Pais_id;
        private $Integrante_id;

    function Entrenador(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
  

    public function get_id_pais(){
        return $this->id_pais;
    }
    
    public function set_id_pais($valor){
        $er= new Er();
        if ($er->valida_numero($valor)){
            $this->id_pais = trim( $valor );
        }else{
            $this->errores[]= "El id pais : $valor no es valido";
        }
    }

    public function get_id_integrante(){
        return $this->id_integrante;
    }
    
    public function set_id_integrante($valor){
        $er= new Er();
        if ($er->valida_numero($valor)){
            $this->id_integrante = trim( $valor );
        }else{
            $this->errores[]= "El id integrante : $valor no es valido";
        }
    }



    
    
    
}

?>
