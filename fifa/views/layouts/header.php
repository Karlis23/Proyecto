<?php 
  define('BASEURL','http://localhost/proyecto');
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
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">FIFA</a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <!--<div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>-->
            <?php if(!isset($_SESSION['user'])){ ?>
              <li><a href="<?php echo BASEURL;?>/views/site/login.php">
                <!--<span class="glyphicon-log-in"></span>Login-->
                <button type="submit" class="btn btn-success">Login</button>
                  </a>

              </li>
            <?php } else{?>
              <li><a href="<?php echo BASEURL;?>/views/site/logout.php">
                <!--<span class="glyphicon-log-in"></span>Logout-->
                <button type="submit" class="btn btn-success">Logout</button>
              </a>
            </li>
            <?php } ?>
            
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

  <div class="container">
      