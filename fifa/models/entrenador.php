<?php

class Entrenador extends Modelo{
    public $nombre_tabla = 'entrenador';
    public $pk = 'Entrenador_id';
    
    
    public $atributos = array(
        'Pais_id'=>array(),
        'Integrante_id'=>array()
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
    
  

    public function get_pais_id(){
        return $this->pais_id;
    }
    
    public function set_pais_id($valor){
        $er = new ER();
        if(!$er->valida_numeros($valor)){
            $this->errores[]="El Pais no es valido"
        }else{
            $this->pais_id=trim($valor)
        }

    }
    public function get_integrante_id(){
        return $this->integrante_id;
    }
    
    public function set_integrante_id($valor){
        $er = new ER();
        if(!$er->valida_numeros($valor)){
            $this->errores[]="El Integrante no es valido"
        }else{
            $this->integrante_id=trim($valor)
        }
    }



    
    
    
}

?>
