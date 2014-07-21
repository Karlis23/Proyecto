<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Equipo.php');
  include ('../../controllers/EquipoController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php'); 

?>



    <div class="container">

		<h2 class="text-center">Registro del Equipo:</h2><hr>
		<form role="form">

			<!--<title>Registro Ciudad</title>-->

			  <div class="form-group">
			    <label for="nombre">Nombre:</label>
			    <input type="text" class="form-control" id="nombre" placeholder="Enter nombre">
			  </div>

			   <div class="form-group">
			    <label for="id_pais">Identificador Pa&iacute;s:</label>
			    <input type="text" class="form-control" id="id_pais" placeholder="Enter identificador">
			  </div>

			   <div class="form-group">
			    <label for="escudo">Escudo:</label>
			    <input type="file" class="form-control" id="escudo" placeholder="Enter escudo">
			  </div>

  			<button type="button" class="btn btn-primary">Guardar</button>

		</form>

		</div>



<?php include ('../layouts/footer.php'); ?>