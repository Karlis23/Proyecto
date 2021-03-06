<?php

class Integrante extends Modelo{
    public $nombre_tabla = 'integrante';
    public $pk = 'id_integrante';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'apellido'=>array(),
        'peso'=>array(),
        'estatura'=>array(),
        'foto'=>array(),
        'Edad'=>array(),
        'id_equipo'=>array()
    );
    
    public $errores = array( );
    
    
        private $nombre;
        private $apellido;
        private $peso;
        private $estatura;
        private $foto;
        private $Edad;
        private $id_equipo;     

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
            $this->nombre = trim( ($valor) );
        }else{
            $this->errores[]= "El nombre de integrante : $valor no es valido";
        }
    }

    public function get_apellido(){
        return $this->apellido;
    }
    
    public function set_apellido($valor){
        $er= new Er();
        if ($er->valida_nombre($valor)){
            $this->apellido = trim( ($valor) );
        }else{
            $this->errores[]= "El apellido : $valor no es valido";
        }
    }

    public function get_peso(){
        return $this->peso;
    }
    
    public function set_peso($valor){
        $er= new Er();
        if ($er->valida_numero_decimales($valor)){
            $this->peso = trim( ($valor) );
        }else{
            $this->errores[]= "El peso : $valor no es valido";
        }
    }

    public function get_estatura(){
        return $this->estatura;
    }
    
    public function set_estatura($valor){
        $er= new Er();
        if ($er->valida_numero_decimales($valor)){
            $this->estatura = trim( ($valor) );
        }else{
            $this->errores[]= "La estura : $valor no es valido";
        }
    }

    public function get_foto(){
        return $this->foto;
    }
    
    public function set_foto($valor){


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
        $this->foto = trim($valor['name']);
    }

    public function get_edad(){
        return $this->Edad;
    }
    
    public function set_edad($valor){

        $er= new Er();
        if ($er->valida_numero($valor)){
            $this->Edad = trim( ($valor) );
        }else{
            $this->errores[]= "La edad : $valor no es valido";
        }
    }

    public function get_id_equipo(){
        return $this->id_equipo;
    }
    
    public function set_id_equipo($valor){

        $er= new Er();
        if ($er->valida_numero($valor)){
            $this->id_equipo = trim( ($valor) );
        }else{
            $this->errores[]= "El  equipo : $valor no es valido";
        }
    }
    


    
    
    
}

?>
