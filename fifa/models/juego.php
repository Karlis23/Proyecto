<?php


class Juego extends Modelo{
    public $nombre_tabla = 'juego';
    public $pk = 'id_juego';
    
    
    public $atributos = array(
        'fecha'=>array(),
        'id_equipolocal'=>array(),
        'id_equipovisitante'=>array(),
        'id_estadio'=>array(),
        'goles_Local'=>array(),
        'goles_visitante'=>array(),        
    );
    
    public $errores = array( );
    
    
        private $fecha;   
        private $id_equipolocal;   
        private $id_equipovisitante;  
        private $id_estadio;   
        private $goles_Local;   
        private $goles_visitante;


    function Juego(){
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
            $this->fecha = trim( $valor );
        }else{
            $this->errores[]= "El nombre de integrante : $valor no es valido";
        }
    }

    public function get_id_equipolocal(){
        return $this->id_equipolocal;
    }
    
    public function set_id_equipolocal($valor){
        $er= new Er();
        if ($er->valida_numero($valor)){
            $this->id_equipolocal = trim( $valor );
        }else{
            $this->errores[]= "El nombre de integrante : $valor no es valido";
        }
    }



     public function get_id_equipovisitante(){
        return $this->id_equipovisitante;
    }
    
    public function set_id_equipovisitante($valor){
        $er= new Er();
        if ($er->valida_numero($valor)){
            $this->id_equipovisitante = trim( $valor );
        }else{
            $this->errores[]= "El nombre de integrante : $valor no es valido";
        }
    }

   
   
    public function get_id_estadio(){
        return $this->id_estadio;
    }
    
    public function set_id_estadio($valor){
        $er= new Er();
        if ($er->valida_numero($valor)){
            $this->id_estadio = trim( $valor );
        }else{
            $this->errores[]= "El nombre de integrante : $valor no es valido";
        }
    }



     public function get_goles_Local(){
        return $this->goles_Local;
    }
    
    public function set_goles_Local($valor){
        $er= new Er();
        if ($er->valida_numero($valor)){
            $this->goles_Local = trim( $valor );
        }else{
            $this->errores[]= "El nombre de integrante : $valor no es valido";
        }
    } 

     public function get_goles_visitante(){
        return $this->goles_visitante;
    }
    
    public function set_goles_visitante($valor){
        $er= new Er();
        if ($er->valida_numero($valor)){
            $this->goles_visitante = trim( $valor );
        }else{
            $this->errores[]= "El nombre de integrante : $valor no es valido";
        }
    } 
}

?>
