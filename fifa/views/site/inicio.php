<?php 
session_start();
    include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../libs/Er.php');
	  include ('../layouts/header.php'); 
	  $model = new Modelo();
	  
	?>
	
	<br />
	<br />
	<br />
    <!--<div class="container">-->
    	<div class="row">
    		<div class="col-md-4 bord">
    			Articulos
                <?php include ('carr.php');?>
    		</div>
    		<div class="col-md-8 bord">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 bord capaprin">
                            <h2>Lista de Entrenadores</h2>
                            
                            <?php 
                                if(isset($_SESSION['user'])){
                                    $cadena = "<div><a href='../Entrenador/'><button class='btn btn-success btn-lg'> Agregar Entrenadores</button></a></div><br/>";
                                    echo $cadena;
                                }
                             ?>
                            <?php
                             $model->entrenadores();
                              ?>
                        </div>
                        <div class="col-md-4 bord capaprin">
                            
                            <h2>Lista de Equipos</h2>
                            
                            <?php 
                                if(isset($_SESSION['user'])){
                                    $cadena = "<div><a href='../Equipo/'><button class='btn btn-success btn-lg'> Agregar Equipos</button></a></div><br/>";
                                    echo $cadena;
                                }
                             ?>
                            <?php
                             $model->ListaEquipos('nombre,escudo','equipo','');
                              ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 bord capaprin">
                            
                            
                            <h2>Lista de Jugadores</h2>
                            <?php 
                                if(isset($_SESSION['user'])){
                                    $cadena = "<div><a href='../jugador/'><button class='btn btn-success btn-lg'> Agregar Jugadores</button></a></div><br/>";
                                    echo $cadena;
                                }
                             ?>
                            <?php
                             $model->Jugadores();
                              ?>
                            
                            
                        </div>
                    </div>
                </div>
    		</div>
    	</div>
    <!--</div>-->












<?php 	include ('../layouts/footer.php'); ?>