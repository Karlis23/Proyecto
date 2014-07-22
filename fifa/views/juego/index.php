<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Juego.php');
  include ('../../controllers/JuegoController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php'); 
  
  $juegoC = new JuegoController();
  if (isset($_POST['nombre'])) { 
    $juegoC->insertaJuego($_POST,$_FILES);
  }
?>
<div class="row">
	<form id="accountForm" method="post" class="form-horizontal">
            			<h1>Registro de Juego:</h1>

            			
            				<div class="form-group">
            					<div class="col-md-3"></div>
        						<div class="col-md-6">
						            <label for="fecha">Fecha:</label>
						            <div class="row">
						              
						                <div class='input-group date' id='fecha'>
						                    <input type="text" class="form-control" name="fecha" id="fecha" />
						                    <span class="input-group-addon">
						                      <span class="glyphicon glyphicon-time"></span>
						                    </span>
						                </div>
						                  <span class="help-block">Formato sugerido para este campo:MM/DD/YYYY h:m </span>
						              
				            		</div>
				        		
				        

			                    <div class="form-group">
			                        <label>Identificador Equipo Local:</label>
			                            <input type="text" class="form-control" name="id_equipolocal" />   
			                    </div>

			                    <div class="form-group">
			                        <label>Identificador Equipo Visitante:</label>
			                            <input type="text" class="form-control" name="id_equipovisitante" />
			                    </div>


			                    <div class="form-group">
			                        <label>Identificador del Estadio:</label>
			                            <input type="text" class="form-control" name="id_estadio" />
			                    </div>

			                    <div class="form-group">
			                        <label>Goles Equipo Local:</label>
			                            <input type="text" class="form-control" name="goles_Local" />
			                    </div>

			                    <div class="form-group">
			                        <label>Goles Equipo Visitante:</label>
			                            <input type="text" class="form-control" name="goles_visitante" />
			                    </div>
			          
                    			<div class="form-group">
					                    <button type="submit" class="btn btn-primary">Validar</button>
           						</div>	

           						</div>	

           					</div>
				     
					</form>
   </div>					

<?php include ('../layouts/footer.php'); ?>