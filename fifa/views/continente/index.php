<?php 
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
    $contienteC->insertaContinente($_POST,$_FILES);
  }
?>
    <div class="row">
      <div class="col-md-10">
        <h4>Continente</h4>


          <?php
            if ($continenteC->muestra_errores) {
          ?>
                <div class="alert alert-danger"> 
                  <?php
                    foreach ($continenteC->errores as $value) {
                      echo "<p>$value</p>";
                    }
                  ?>

                </div>
           <?php   
            } 
          ?>


        <form id="formregistro" enctype="multipart/form-data" method="POST" class="form-horizontal">
          
          <div class="form-group">
            <label class="col-lg-3 control-label" for="nombre">Nombre Continente</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $continenteC->get_nombre(); ?>"/>
            </div>
          </div>
            <input type="submit" name="Guardar" value="Guardar" />
          </div>
          
        </form>  

      </div>
    </div>
  
</div>


<?php include ('../layouts/footer.php'); ?>