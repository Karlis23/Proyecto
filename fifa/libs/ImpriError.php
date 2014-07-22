<?php 
 class ImpriError {




public function ImprimirError($arreglo){
			$cadena="";
			if (count($arreglo)>0){
				$cadena.='<div class="alert alert-danger">';
				foreach ($arreglo as $value) {
	    			 			$cadena.="<p>$value</p>";
	    			 		}
	    		$cadena.="</div>";
			}else{

			}
			return $cadena;
		}
}
 ?>



	    		