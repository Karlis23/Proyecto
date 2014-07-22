<?php
	class PaisController extends Pais{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Pais();
		}
		
		public function insertaPais($datos,$archivos){
			/*echo "<pre>datos:";
			print_r($datos);
			print_r($archivos);
    		echo "</pre>";*/
    		//die();
    		
			//$pais = new this();
			$this->set_nombre($datos['nombre']);
			$this->set_bandera($archivos['bandera']);
			$this->set_id_continente($datos['id_continente']);
			
			if (count($this->errores)>0) {
				//print_r($this->errores);
				//die();
				$this->muestra_errores = true;
			}
			else {
				move_uploaded_file($archivos['bandera']['tmp_name'], "../archivos/".$archivos['bandera']['name']);
				$this->inserta($this->get_atributos());
				header("location:../site/inicio.php");
			}

			

			

		}

	}

?>