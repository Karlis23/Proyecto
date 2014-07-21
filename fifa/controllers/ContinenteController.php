<?php
	class ContinenteController extends Continente {
		
		public $muestra_errores = false;
		function __construct(){
			parent::Continente();
		}
		
		public function insertaContinente($datos){
			echo "<pre>datos:";
			print_r($datos);
    		echo "</pre>";
			//$continente = new Continente();
			$this->set_nombre($datos['nombre']);
			
			if (count($this->errores)>0) {
				//print_r($status->errores);
				//die();
				$this->muestra_errores = true;
			}
			else {

			$this->inserta($this->get_atributos());
			}

		}

	}


?>