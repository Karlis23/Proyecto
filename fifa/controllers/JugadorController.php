<?php
	class JugadorController extends Jugador{
		
		public $muestra_errores = false;
		function __construct(){
			parent::jugador();
		}
		
		public function insertaJugador($datos){
			/*echo "<pre>datos:";
			print_r($datos);
    		echo "</pre>";*/
    		//die();
    		
			//$pais = new this();
			$this->set_numero($datos['numero']);
			$this->set_id_integrante($datos['id_integrante']);
			$this->set_id_posicion($datos['id_posicion']);
			
			if (count($this->errores)>0) {
				//print_r($this->errores);
				//die();
				$this->muestra_errores = true;
			}
			else {
				$this->inserta($this->get_atributos());
			header("location:../site/inicio.php");
			}

			

			

		}

	}

?>