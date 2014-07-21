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

        <h4>Pais</h4>

        <form id="formregistro" enctype="multipart/form-data" method="POST" class="form-horizontal">
          <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">      
          <div class="form-group">
            <label  for="nombre">Nombre Pa&iacute;s</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $paisC->get_nombre(); ?>" placeholder="Enter nombre"/>
          </div>

          <div class="form-group">
            <label  for="bandera">Bandera</label>
            <input type="file" class="form-control" name="bandera" id="bandera"/>

          </div>

          <div class="form-group">
            <label  for="id_continente">Id continente</label>
            <input type="text" class="form-control" name="id_continente" id="id_continente" value="<?php echo $paisC->get_id_continente(); ?>" placeholder="Seleccionar Id"/>
          </div>
            <button type="button" class="btn btn-primary">Guardar</button>
      </div> 
      <div class="col-md-3"></div>
      </div>
        </form>  
  
</div>


<?php include ('../layouts/footer.php'); ?>