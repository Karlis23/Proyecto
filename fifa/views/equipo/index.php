<?php 
  include ('../../libs/security.php');
  include ('../../libs/ImpriError.php');
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Equipo.php');
  include ('../../controllers/EquipoController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php'); 
  
     // echo "<pre>datos:";
     // print_r($_POST);
     //  print_r($_FILES);
     //   echo "</pre>";
    //  die(); 
    $equipoC=new EquipoController();     
  if (isset($_POST['nombre'])) {
    $equipoC->insertaEquipo($_POST,$_FILES);
  }
  $model = new Modelo();
?>

          <?php 
              $im = new ImpriError();
            echo $im->ImprimirError($equipoC->errores);
           ?>


        <h4>Equipo</h4>

        <form id="formregistro" enctype="multipart/form-data" method="POST" class="form-horizontal">
          <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">      
          <div class="form-group">
            <label  for="nombre">Nombre Equipo</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $equipoC->get_nombre(); ?>" placeholder="Enter nombre"/>
          </div>
          <div class="form-group">
            <label  for="id_pais">Id Pa&iacute;s</label>
            <?php echo $model->getDropDown("pais","id_pais","id_pais","id_pais","nombre"); ?>
            </div>
          <div class="form-group">
            <label  for="escudo">Escudo</label>
            <input type="file" class="form-control" name="escudo" id="escudo"/>

          </div>


            <button type="submit" class="btn btn-primary">Guardar</button>
      </div> 
      <div class="col-md-3"></div>
      </div>
        </form>  
  
</div>


<?php include ('../layouts/footer.php'); ?>