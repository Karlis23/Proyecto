<?php 
  include ('../../libs/security.php');
  include ('../../libs/ImpriError.php');
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Jugador.php');
  include ('../../controllers/JugadorController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php'); 
 $model = new Modelo();
    $entrenador=new JugadorController();     
  if (isset($_POST['numero'])) {
    $entrenador->insertaJugador($_POST);
  }
?>

<?php 
              $im = new ImpriError();
            echo $im->ImprimirError($entrenados->errores);
           ?>
		
		<div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">  
        <form method="post" enctype="multipart/form-data">
              
        
         
                 <h4>Registro Jugador</h4>
				       

				          <div class="form-group">
				            <label for="numero">N&uacute;mero de la Playera:</label>
				            <input type="text" class="form-control" name="numero" />
				          </div>

				        <div class="form-group">
						    <label for="id_posicion">Identificador de la Posici&oacute;n</label>
						    <?php 
                      		echo $model->getDropDown("posicion","id_posicion","id_posicion","id_posicion","nombre");
                       			?>
						     </div>

				        <div class="form-group">
						    <label for="id_posicion">Identificador de la Integrante</label>
						     <?php 
                      		echo $model->IntegrantesLibres();
                       			?>
                       			</div>
            <button type="submit" class="btn btn-primary">Guardar</button>

            </form>  
      </div> 
       <div class="col-md-3"></div>
        </div>
 
        


  
</div>

<?php include ('../layouts/footer.php'); ?>