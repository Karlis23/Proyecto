<?php 
  include ('../../libs/security.php');
  include ('../../libs/ImpriError.php');
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Pais.php');
  include ('../../controllers/PaisController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php'); 
  
     // echo "<pre>datos:";
     // print_r($_POST);
     //  print_r($_FILES);
     //   echo "</pre>";
    //  die(); 
    $paisC=new PaisController();     
  if (isset($_POST['nombre'])) {
    $paisC->insertaPais($_POST,$_FILES);
  }
?>

          <?php 
              $im = new ImpriError();
            echo $im->ImprimirError($paisC->errores);
           ?>
        <h4>Pais</h4>





        <form id="Form_pais" enctype="multipart/form-data" method="POST" class="form-horizontal">
          <div class="row">
        
        <div class="col-md-8">      
          <div class="form-group">
            <label  for="nombre" class="col-md-3 control-label">Nombre Pa&iacute;s</label>
            <div class="col-md-5">
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $paisC->get_nombre(); ?>" placeholder="Enter nombre"/>
            </div>
          </div>

          <div class="form-group">
            <label  for="bandera" class="col-md-3 control-label">Bandera</label>
            <div class="col-md-5">
              <input type="file" class="form-control" name="bandera" id="bandera"/>
            </div>
          </div>

          <div class="form-group">
            <label  for="id_continente" class="col-md-3 control-label">Continente</label>
            <div class="col-md-5">
              <?php echo $paisC->getDropDown('continente','id_continente','id_continente','id_continente','nombre'); ?>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-5 col-md-offset-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </div>
      </div> 
      </div>
    </form>  
  


<?php include ('../layouts/footer.php'); ?>