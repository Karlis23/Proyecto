<?php 
  include ('../../libs/security.php');
  include ('../../libs/ImpriError.php');
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Continente.php');
  include ('../../controllers/ContinenteController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php'); 
  
     // echo "<pre>datos:";
     // print_r($_POST);
     //  print_r($_FILES);
     //   echo "</pre>";
    //  die(); 
    $continenteC=new ContinenteController();     
  if (isset($_POST['nombre'])) {
    $continenteC->insertaContinente($_POST);
  }
?>

          <?php 
              $im = new ImpriError();
            echo $im->ImprimirError($continenteC->errores);
           ?>
           
        <h4>Continente</h4>

        <form id="Form_continente" enctype="multipart/form-data" method="POST" class="form-horizontal">
      <div class="row">
        <div class="col-md-8">          
          <div class="form-group">
            <label  for="nombre" class="col-md-3 control-label">Nombre Continente</label>
            <div class="col-md-5">
              <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $continenteC->get_nombre(); ?>" placeholder="Enter nombre"/>           
            </div>
          </div>

        <div class="form-group">
            <div class="col-md-5">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>

      </div> 
        </div>



 
        </form>  


  
</div>


<?php include ('../layouts/footer.php'); ?>