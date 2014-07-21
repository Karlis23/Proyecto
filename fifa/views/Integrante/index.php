<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Integrante.php');
  include ('../../controllers/IntegranteController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php'); 

?>



   

		<form role="form">

		<h2 class="text-center">Registro del Integrante:</h2><hr>

			<!--<title>Registro Ciudad</title>-->
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					  <div class="form-group">
					    <label for="nombre">Nombre</label>
					    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Enter nombre">
					  </div>

					   <div class="form-group">
					    <label for="apellido">Apellido</label>
					    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Enter apellido">
					  </div>

					   <div class="form-group">
					    <label for="peso">Peso del Integrante</label>
					    <input type="text" class="form-control" name="peso" id="peso" placeholder="Enter peso">
					  </div>

					   <div class="form-group">
					    <label for="estatura">Estatura</label>
					    <input type="text" class="form-control" name="estatura" id="estatura" placeholder="Enter estatura">
					  </div>

					   <div class="form-group">
					    <label for="foto">Foto</label>
					    <input type="file" class="form-control" name="foto" id="foto" placeholder="Enter foto">
					  </div>

					   <div class="form-group">
					    <label for="Edad">Edad</label>
					    <input type="text" class="form-control" name="Edad" id="Edad" placeholder="Enter edad">
			  		   </div>

					   <div class="form-group">
					    <label for="id_equipo">Id Equipo</label>
					    <input type="text" class="form-control" name="id_equipo" id="id_equipo" placeholder="Enter Identificador">
			  		   </div>			  		   


			<b>Tipo de Integrante:</b><br />
			 <div class="radio">
			 	<label>
			 		<input type="radio" name="formulario"></input>
			 	</label>
			 </div>			

        </div>
        <div class="col-md-3"></div>
		</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
			        <h4>Registro Entrenador:</h4>
			        <form id="formregistro" method="POST" class="form-horizontal">

					   <div class="form-group">
					    <label for="id_pais">Id Pa&iacute;s</label>
					    <input type="text" class="form-control" name="id_pais" id="id_pais" placeholder="Enter identificador">
			  		   </div>	

					   <div class="form-group">
					    <label for="id_integrante">Id Integrante</label>
					    <input type="text" class="form-control" name="id_integrante" id="id_integrante" placeholder="Enter identificador">
			  		   </div>	

			         
			           
			       	<button type="button" class="btn btn-primary">Guardar</button>
			        </form>  


			    </div>
			    <div class="col-md-3"></div>
			    </div>

			    <div class="row">
			    	<div class="col-md-3"></div>
				      <div class="col-md-6">
				        <h4>Registro Jugador</h4>
				        <form id="formregistro" method="POST" class="form-horizontal">
				          <div class="form-group">
				            <label for="numero">N&uacute;mero de la Playera:</label>
				            <input type="text" class="form-control" name="numero" />

				          </div>
					   <div class="form-group">
					    <label for="id_integrante">Id Integrante</label>
					    <input type="text" class="form-control" name="id_integrante" id="id_integrante" placeholder="Enter identificador">
			  		   </div>	
					   <div class="form-group">
					    <label for="id_posicion">Id Posici&oacute;n</label>
					    <input type="text" class="form-control" name="id_posicion" id="id_posicion" placeholder="Enter identificador">
			  		   </div>				  		   				          
				      	<button type="button" class="btn btn-primary">Guardar</button>
				        </form>  


				    </div>
				    <div class="col-md-3"></div>
				    </div>


 

		</form>

		</div>
 


<?php include ('../layouts/footer.php'); ?>