<?php

class juego extends Modelo{
    public $nombre_tabla = 'juego';
    public $pk = 'id_juego';
    
    
    public $atributos = array(
        'fecha'=>array(),
        'id_equipolocal'=>array(),
        'id_equipovisitante'=>array(),
        'id_estadio'=>array(),
        'goles_Local'=>array(),
        'goles_visitante'=>array()
    );
    
    public $errores = array( );

        private $fecha;
        private $id_equipolocal;
        private $id_equipovisitante;
        private $id_estadio;

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
    
  

    public function get_fecha(){
        return $this->fecha;
    }
    
    public function set_fecha($valor){ 
        $er= new Er();
        if ($er->valida_fecha($valor)){
            $this->fecha = trim( md5($valor) );
        }else{
            $this->errores[]= "El nombre del estadio: $valor, no es valido ";
        }
    }
    public function get_id_equipolocal(){
        return $this->id_equipolocal;
    }
    
    public function set_id_equipolocal($valor){ 
        $er= new Er();
        if ($er->valida_numeros($valor)){
            $this->id_equipolocal = trim( md5($valor) );
        }else{
            $this->errores[]= "El nombre del estadio: $valor, no es valido ";
        }
    }


    public function get_id_equipovisitante(){
        return $this->id_equipovisitante;
    }
    
    public function set_id_equipovisitante($valor){ 
        $er= new Er();
        if ($er->valida_numeros($valor)){
            $this->id_equipovisitante = trim( md5($valor) );
        }else{
            $this->errores[]= "El nombre del estadio: $valor, no es valido ";
        }
    }


     public function get_id_estadio(){
        return $this->id_estadio;
    }
    
    public function set_id_estadio($valor){ 
        $er= new Er();
        if ($er->valida_numeros($valor)){
            $this->id_estadio = trim( md5($valor) );
        }else{
            $this->errores[]= "El nombre del estadio: $valor, no es valido ";
        }
    }

     public function get_goles_Local(){
        return $this->goles_Local;
    }
    
    public function set_goles_Local($valor){ 
        $er= new Er();
        if ($er->valida_numeros($valor)){
            $this->goles_Local = trim( md5($valor) );
        }else{
            $this->errores[]= "El nombre del estadio: $valor, no es valido ";
        }
    }

     public function get_goles_visitante(){
        return $this->goles_visitante;
    }
    
    public function set_goles_visitante($valor){ 
        $er= new Er();
        if ($er->valida_numeros($valor)){
            $this->goles_visitante = trim( md5($valor) );
        }else{
            $this->errores[]= "El nombre del estadio: $valor, no es valido ";
        }
    }

   

    
    
    
}

?>
