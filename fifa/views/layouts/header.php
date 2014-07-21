<?php 
  define('BASEURL','http://localhost/web_v/practica12/fifa');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/jquery.fancybox.pack.js"></script>    
    <link href="../css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />    
    
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrapValidator.min.css" rel="stylesheet" />
    <!--<link  href="../css/style.css" rel="stylesheet" >-->
    <!--<link href="../css/dashboard.css" rel="stylesheet">-->
    <link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/mycss.css">
    
    <!--<script src="../js/jquery-1.10.2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
          <!-- Required JS -->
    <script src="../js/moment.min.js"></script>
    <script src="../js/bootstrap-datetimepicker.min.js"></script>
    <script src="../js/jquery.raty.min.js"></script>

    <!--<link href="../css/offcanvas.css" rel="stylesheet">-->
    <title>Práctica 12</title>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Examen 3</a>
          <ul class="nav navbar-nav navbar-right">
            <?php if(!isset($_SESSION['user'])){ ?>
            <li><a href="<?php echo BASEURL;?>/views/site/login.php">
              <span class="glyphicon-log-in"></span>Login</a>
            </li>
            <?php } else{?>
            <li><a href="<?php echo BASEURL;?>/views/site/logout.php">
              <span class="glyphicon-log-in"></span>Logout</a>
            </li>
            <?php } ?>
          </ul>  
        </div>


        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <?php if(isset($_SESSION['user'])){ ?>
            <li><a href="<?php echo BASEURL;?>/views/pais/pais.php" class="fancyy">Pais</a></li>
            <li><a href="<?php echo BASEURL;?>/views/equipo/equipo.php" class="fancyy">Equipo</a></li>
            <li><a href="<?php echo BASEURL;?>/views/integrante/integrante.php" class="fancyy">Integrante</a></li>
            <?php } ?>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Buscar...">
          </form>
        </div>

      </div>
    </div>
    <div class="container">
      