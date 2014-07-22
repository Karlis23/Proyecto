<?php 
  include ('../../libs/security.php');
  include ('../../libs/ImpriError.php');
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Integrante.php');
  include ('../../controllers/IntegranteController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php'); 
  $Integrante = new IntegranteController();
  if (isset($_POST['nombre'])){
  	echo "<pre>";
  	print_r($_POST);
  	echo "</pre>";
  	$Integrante->insertaIntegrante($_POST,$_FILES);

  }

?>

<?php 
              $im = new ImpriError();
            echo $im->ImprimirError($Integrante->errores);
           ?>
		
		<form role="form" id="formintegrante" method="post" enctype="multipart/form-data">

			<h2 class="text-center">Registro del Integrante:</h2><hr>
			<div class="row">
			  <div class="form-group">
			  	<div class="col-md-6">
				    <label for="nombre">Nombre:</label>
				    <input type="text" class="form-control"  name="nombre" placeholder="Enter nombre">
			  	</div>
			  </div>
			</div>

			  <div class="row">
			   <div class="form-group">
			   	<div class="col-md-6">
				    <label for="apellido">Apellido:</label>
				    <input type="text" class="form-control"  name="apellido" placeholder="Enter apellido">
			  	</div>
			  </div>
			  </div>

			  <div class="row">
			   <div class="form-group">
			   	<div class="col-md-6">
				    <label for="peso">Peso del Integrante:</label>
				    <input type="text" class="form-control"  name="peso" placeholder="Enter peso">
			  </div>
			  </div>
			  </div>

			    <div class="row">
			   <div class="form-group">
			   	<div class="col-md-6">
				    <label for="estatura">Estatura:</label>
				    <input type="text" class="form-control"  name="estatura" placeholder="Enter estatura">
			  </div>
			  </div>
			  </div>

			   <div class="row">
			   <div class="form-group">
			   	<div class="col-md-6">
				    <label for="foto">Foto:</label>
				    <input type="file" class="form-control"  name="foto" placeholder="Enter foto">
			  </div>
			  </div>
			  </div>

			   <div class="row">
			   <div class="form-group">
			   	<div class="col-md-6">
				    <label for="Edad">Edad:</label>
				    <input type="text" class="form-control" name="edad" placeholder="Enter edad">
			  </div>
			  </div>
			  </div>

			  
			  <div class="row">
			   <div class="form-group">
			   	<div class="col-md-6">
                      <label for="id_equipo">Identificador del Equipo:</label>
                      <?php 
                      		$model = new Modelo();
                      		echo $model->getDropDown("equipo","id_equipo","id_equipo","id_equipo","nombre");
                       ?>
               </div>
			  </div>
			  </div>
                  
    			 <!--<button type="button" class="btn btn-primary">Guardarrrrrrrrrr</button>-->	

    		 

    		 <br />
    		 <br />
    		 <br />

			<!--<b>Tipo de Integrante:</b><br />
			<div class="radio">
  				<label>
    				<input type="radio" name="Tipo"  id="formrentre">Entrenador:</input>
  				</label>
			</div>

			<div class="radio">
  				<label>
    				<input type="radio" name="Tipo"  id="formjuga">Jugador:</input>
  				</label>
			</div>

			      <div class="col-md-10" id="col1">
			        <h4>Registro Entrenador:</h4>
			        

			   
			           <div class="form-group" >
						    <label for="id_pais">Identificador del Pa&iacute;s</label>
						    <input type="text" class="form-control" name="id_pais"   placeholder="Enter identificador">
			  		   </div>		

			  		 

			  		  	

			    </div>

			     <br />

				      <div class="col-md-6" id="col2">
				        <h4>Registro Jugador</h4>
				       

				          <div class="form-group">
				            <label for="numero">N&uacute;mero de la Playera:</label>
				            <input type="text" class="form-control" name="numero" />
				          </div>

				        <div class="form-group">
						    <label for="id_posicion">Identificador de la Posici&oacute;n</label>
						    <input type="text" class="form-control" name="id_posicion" id="id_posicion" placeholder="Enter identificador">
			  		   </div>	

			  		   
				        
					

				    </div>-->
				    <button type="submit" class="btn btn-primary">Guardar</button>

				    </div>

				    </div>

				</form>

<?php include ('../layouts/footer.php'); ?>