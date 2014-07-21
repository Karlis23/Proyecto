<?php

class Pais extends Modelo{
    public $nombre_tabla = 'pais';
    public $pk = 'id_pais';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'bandera'=>array(),
        'id_continente'=>array(),


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

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }
            $this->nombre = trim($valor);
        
    }

    public function get_bandera(){
        return $this->bandera;
    }
    
    public function set_bandera($valor){

        $er = new Er();
        
        if ( !$er->valida_imagen($valor) ){
            $this->errores[] = "Esta bandera (".$valor.") no es valida";
        }
        //agregar aqui la funcion
        $this->bandera = trim($valor['name']);
    
    }


    public function get_id_continente(){
        return $this->id_continente;
    }

     public function set_id_continente($valor){

        $er = new Er();
        
        if ( !$er->valida_numeros($valor) ){
            $this->errores[] = "Este id continente (".$valor.") no es valido";
        }

        $this->id_continente = trim($valor);
    
    }

    
}


?>
