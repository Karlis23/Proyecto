<?php 
  define('BASEURL','http://localhost/proyecto/fifa');
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
<!-- Javascript-->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/jquery.fancybox.pack.js"></script>    
    <link href="../css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />    
    
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrapValidator.min.css" rel="stylesheet" />
    <link  href="../css/micss.css" rel="stylesheet" >
    <!--<link href="../css/dashboard.css" rel="stylesheet">-->
    <link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="../css/carousel.css" rel="stylesheet">
    <link href="../css/jsCarousel-2.0.0.css" rel="stylesheet"/>
    
    <!--<script src="../js/jquery-1.10.2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
          <!-- Required JS -->
    <script src="../js/moment.min.js"></script>
    <script src="../js/bootstrap-datetimepicker.min.js"></script>
    <script src="../js/jquery.raty.min.js"></script>
    <script src="../js/jquery-1.4.4.min.js"></script>
    <script src="../js/jsCarousel-2.0.0.js"></script>








    <!--<link href="../css/offcanvas.css" rel="stylesheet">-->
    <title>Proyecto Final</title>




  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="barrita">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo BASEURL;?>/views/site/inicio.php">FIFA</a>
          <ul class="nav navbar-nav navbar-right">
            <?php if(isset($_SESSION['user'])){ ?>
            <li><a href="<?php echo BASEURL;?>/views/continente/" >Continente</a></li>
            <li><a href="<?php echo BASEURL;?>/views/pais/" >Pais</a></li>
            <li><a href="<?php echo BASEURL;?>/views/equipo/">Equipo</a></li>
            <li><a href="<?php echo BASEURL;?>/views/integrante/">Integrante</a></li>
                
            <?php }  ?>
            
            
            
          </ul>





        </div>
        <div class="navbar-collapse collapse">

          <ul class="nav navbar-nav navbar-right">
            <?php if(!isset($_SESSION['user'])){ ?>
              <li><a href="<?php echo BASEURL;?>/views/site/login.php">
                <button class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Login</button>
                <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <!--<span class="btn btn-info">Login</span>-->
                </a>
              </li>

            <?php } else{?>
              <li><a href="<?php echo BASEURL;?>/views/site/logout.php" >
                <!--<span class="glyphicon-log-in"></span>Logout-->
                <span class="btn btn-info">Logout</span>
              </a>
            </li>
            <?php } ?>
          </ul>  

        </div><!--/.navbar-collapse -->
      </div>
    </div>

  <div class="container">   