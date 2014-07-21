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



    <div class="container">

		<h2 class="text-center">Registro del Integrante:</h2><hr>
		<form role="form">

			<!--<title>Registro Ciudad</title>-->

			  <div class="form-group">
			    <label for="nombre">Nombre:</label>
			    <input type="text" class="form-control" id="nombre" placeholder="Enter nombre">
			  </div>

			   <div class="form-group">
			    <label for="apellido">Apellido:</label>
			    <input type="text" class="form-control" id="apellido" placeholder="Enter apellido">
			  </div>

			   <div class="form-group">
			    <label for="peso">Peso del Integrante:</label>
			    <input type="text" class="form-control" id="peso" placeholder="Enter peso">
			  </div>

			   <div class="form-group">
			    <label for="estatura">Estatura:</label>
			    <input type="text" class="form-control" id="estatura" placeholder="Enter estatura">
			  </div>

			   <div class="form-group">
			    <label for="foto">Foto:</label>
			    <input type="file" class="form-control" id="foto" placeholder="Enter foto">
			  </div>

			   <div class="form-group">
			    <label for="Edad">Edad:</label>
			    <input type="text" class="form-control" id="Edad" placeholder="Enter edad">
			  </div>

			  <div class="form-group">
                      <label for="id_equipo">Identificador del Equipo:</label>
                      <select class="form-control">
                            <option>Elige uno:</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                      </select>
                  </div>

			<b>Tipo de Integrante:</b><br />
			<input type="radio" class="form-control" name="Tipo" placeholder="Enter identificador">Entrenador<br />
			<input type="radio" class="form-control" name="Tipo" placeholder="Enter identificador">Jugador<br />


			    <div class="row">
			      <div class="col-md-10">
			        <h4>Registro Entrenador:</h4>
			        <form id="formregistro" method="POST" class="form-horizontal">

			          <div class="form-group">
			           <div class="form-group">
			            <label class="col-lg-3 control-label" for="Pais_id">Identificador del  Pa&iacute;s:</label>
				            <select class="form-control">
		                            <option>Elige uno:</option>
		                              <option>1</option>
		                              <option>2</option>
		                              <option>3</option>
		                              <option>4</option>
		                              <option>5</option>
		                      </select>
			          </div>
			          </div>

			        <div class="form-group">
			           <div class="form-group">
			            <label class="col-lg-3 control-label" for="Integrante_id">Identificador del Integrante:</label>
					            <select class="form-control">
		                            <option>Elige uno:</option>
		                              <option>1</option>
		                              <option>2</option>
		                              <option>3</option>
		                              <option>4</option>
		                              <option>5</option>
		                      </select>
			          </div>
			        </div>

			         
			           
			        <input type="submit" name="Guardar" value="Guardar" />
			        </form>  


			    </div>
			    </div>

			    <div class="row">
				      <div class="col-md-10">
				        <h4>Registro Jugador</h4>
				        <form id="formregistro" method="POST" class="form-horizontal">
				          <div class="form-group">
				            <label class="col-lg-3 control-label" for="numero">N&uacute;mero de la Playera:</label>
				            <div class="col-lg-5">
				                <input type="text" class="form-control" name="numero" />
				            </div>
				          </div>

				          <div class="form-group">
				              <label class="col-lg-3 control-label" for="id_integrante">Identificador del Integrante:</label>
					              <select class="form-control">
		                            <option>Elige uno:</option>
		                              <option>1</option>
		                              <option>2</option>
		                              <option>3</option>
		                              <option>4</option>
		                              <option>5</option>
		                      </select>
				          </div>

				            <div class="form-group">
				              <label class="col-lg-3 control-label" for="id_posicion">Identificador de la Posici&oacute;n:</label>
					            <select class="form-control">
		                            <option>Elige uno:</option>
		                              <option>1</option>
		                              <option>2</option>
		                              <option>3</option>
		                              <option>4</option>
		                              <option>5</option>
		                      	</select>
				          </div>
				        
				        </form>  


				    </div>
				    </div>

  			<button type="button" class="btn btn-primary">Guardar</button>

		</form>

		</div>
 


<?php include ('../layouts/footer.php'); ?>