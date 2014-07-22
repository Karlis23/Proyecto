<?php session_start();
      
      //include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Usuario.php');
      include ('../../controllers/siteController/LoginController.php');
      include ('../../libs/Er.php');
     

      $login = new LoginController();
      if (isset($_POST['email'])) {
        $login->validaUsuario($_POST);
      }
      
      
      include ('../layouts/header2.php');
?>
<div class="row">

  <div class="col-md-3">
    <div class="<?php echo ($login->muestra_errores)?'alert alert-danger':''; ?> ">
      <?php 
        if ($login->muestra_errores) {
          foreach ($login->errores as $key => $value) {
            echo $value."<br>";
          }
        }
      ?>
    </div>

    

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Login</h4>
            </div>

  <div class="modal-body">
    <form id="Form_sesion" method="post" class="form-horizontal">
        <div class="form-group">
            <label class="col-md-3 control-label" for="email">Email</label>
            <div class="col-md-5">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="password" >Password</label>
            <div class="col-md-5">
                <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña"/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-5 col-md-offset-3">
                <button type="submit" class="btn btn-default">Aceptar</button>
            </div>
        </div>
    </form>
  </div>
  </div>
  </div>  











  </div>


</div>
<?php include ('../layouts/footer.php'); ?>