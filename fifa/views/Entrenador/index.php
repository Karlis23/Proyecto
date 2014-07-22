<?php 
  include ('../../libs/security.php');
  include ('../../libs/ImpriError.php');
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Entrenador.php');
  include ('../../controllers/EntrenadorController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php'); 
  
     // echo "<pre>datos:";
     // print_r($_POST);
     //  print_r($_FILES);
     //   echo "</pre>";
    //  die();
  $model = new Modelo();
    $entrenador=new EntrenadorController();     
  if (isset($_POST['id_pais'])) {
    $entrenador->insertaEntrenador($_POST);
  }
?>

          <?php 
              $im = new ImpriError();
            echo $im->ImprimirError($entrenador->errores);
           ?>

       <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">  
        <form method="post" enctype="multipart/form-data">
        <h4>Registro Entrenador:</h4>
              
        
         
                 <div class="form-group" >
                <label for="id_pais">Pais</label>
                <?php 
                          echo $model->getDropDown("pais","id_pais","id_pais","id_pais","nombre");
                            ?>
               </div>  

                <div class="form-group" >
                <label for="id_pais">Integrante</label>
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