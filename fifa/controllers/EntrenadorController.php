<?php
	class EntrenadorController extends Entrenador{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Entrenador();
		}
		
		public function insertaEntrenador($datos){
			echo "<pre>datos:";
			print_r($datos);
    		echo "</pre>";
    		//die();
    		
			//$pais = new this();
			$this->set_id_pais($datos['id_pais']);
			$this->set_id_integrante($datos['id_integrante']);
			
			if (count($this->errores)>0) {
				//print_r($this->errores);
				//die();
				$this->muestra_errores = true;
			}
			else {
				$this->inserta($this->get_atributos());
			}

			

			

		}

	}

?>