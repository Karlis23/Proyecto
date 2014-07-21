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
    <form role="form" method="POST" >
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" placeholder="Email" class="form-control" id="email" name="email" >
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password" >
      </div>

      <button type="submit" class="btn btn-default">Aceptar</button>
    </form>
  </div>


</div>
<?php include ('../layouts/footer.php'); ?>