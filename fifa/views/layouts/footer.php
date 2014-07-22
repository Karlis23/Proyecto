    <hr>
    <div class="row">
      <div class="col-md-12">
        <hr>
          <p class="text-center">
            Programación Web
            <br/>
            FIFA 2014
            <!--<pre>
                <?php
                    //print_r($_SESSION);
                ?>
            </pre>-->
          </p>
      </div>

    </div>

    </div><!--/.container-->
<!--FancyBox-->
    <script>
        $(document).ready(function() {
            $(".fancyy").fancybox({
                'autoScale': false,
                'transitionIn': 'none',
                'transitionOut': 'none',
                'width': 680,
                'height': 450,
                'type': 'iframe'
            });
        });
    </script>
  <!--Valida Login-->
    <script type="text/javascript">
      $(document).ready(function() {
    $('#Form_sesion').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            email: {
                validators: {
                    emailAddress: {
                        message: 'No es una dirección de correo valida'
                            }
                        }
                    },

            password: {
                validators: {
                    notEmpty: {
                        message: 'El password es requerido.'
                            }
                        }
                    },
                }
            });
        });
    </script>
  <!--Vista Integrante-->
       <script>

      $(document).ready(

        function(){
            $("#col1").hide();
            $("#col2").hide();
            //$("#formintegrante").hide('Slow');                      
                      

          $("#formrentre").click(function(){
              $("#col1").show('Slow'); 
              $("#col2").hide('Slow');           
              $("#entrenador").show();
              $("#jugador").hide();           
          });

          $("#formjuga").click(function(){
              $("#col1").hide('Slow'); 
              $("#col2").show('Slow');           
              $("#entrenador").hide();
              $("#jugador").show();           
          });

          });

    </script>

  <!--Valida Intergrante-->  
  <!--Valida Pais-->

  <script type="text/javascript">
      $(document).ready(function() {
    $('#Form_pais').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                validators: {
                    notEmpty: {
                        message: 'El nombre no es valido inserte solo letras.'
                            }
                        }
                    },
            id_continente: {
                validators: {
                    integer: {
                            message: 'Selecciona uno de la lista'
                    }
                }
            },
            bandera: {
                    validators: {
                        file: {
                            extension: 'jpeg,png,JPG,jpg',
                            type: 'image/jpeg,image/png,image/JPG,image/jpg',
                            maxSize: 2048 * 1024,   // 2 MB
                            message: 'La bandera no es valida'
                        }
                    }
                },        
                }
            });
        });
    </script>

  <!--Valida Continente-->

  <script type="text/javascript">
      $(document).ready(function() {
    $('#Form_continente').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                validators: {
                    notEmpty: {
                        message: 'El nombre no es valido inserte solo letras.'
                            }
                        }
                    },
                }
            });
        });
    </script>

  <!--Valida Equipo-->
  <script type="text/javascript">
      $(document).ready(function() {
    $('#Form_equipo').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                validators: {
                    notEmpty: {
                        message: 'El nombre no es valido inserte solo letras.'
                            }
                        }
                    },
            id_pais: {
                validators: {
                    integer: {
                            message: 'Selecciona uno de la lista'
                    }
                }
            },
            escudo: {
                    validators: {
                        file: {
                            extension: 'jpeg,png,JPG,jpg',
                            type: 'image/jpeg,image/png,image/JPG,image/jpg',
                            maxSize: 2048 * 1024,   // 2 MB
                            message: 'El escudo no es valido'
                        }
                    }
                },        
                }
            });
        });
    </script>

    <!--Carrusel-->
    <script type="text/javascript">
        $(document).ready(function() {

            $('#carouselv').jsCarousel({ onthumbnailclick: function(src) { alert(src); }, autoscroll: true, masked: false, itemstodisplay: 3, orientation: 'v' });


        });       
        
    </script>
<!--Fecha-->
    

  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/bootstrapValidator.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap-datetimepicker.es.js"></script>




  </body>
 
</html>