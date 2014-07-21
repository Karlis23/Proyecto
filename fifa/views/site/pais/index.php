<?php 
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
    <div class="row">
      <div class="col-md-10">
        <h4>Pais</h4>


          <?php
            if ($paisC->muestra_errores) {
          ?>
                <div class="alert alert-danger"> 
                  <?php
                    foreach ($paisC->errores as $value) {
                      echo "<p>$value</p>";
                    }
                  ?>

                </div>
           <?php   
            } 
          ?>


        <form id="formregistro" enctype="multipart/form-data" method="POST" class="form-horizontal">
          
          <div class="form-group">
            <label class="col-lg-3 control-label" for="nombre">Nombre Pa&iacute;s</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $paisC->get_nombre(); ?>"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="bandera">Bandera</label>
            <div class="col-lg-3">
                <input type="file" class="form-control" name="bandera" id="bandera"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="id_continente">Id continente</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="id_continente" id="id_continente" value="<?php echo $paisC->get_id_continente(); ?>"/>
            </div>
          </div>
            <input type="submit" name="Guardar" value="Guardar" />
          </div>
          
        </form>  

      </div>
    </div>
  
</div>


<?php include ('../layouts/footer.php'); ?>