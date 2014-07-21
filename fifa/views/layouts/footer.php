    <hr>
    <div class="row">
      <div class="col-md-12">
        <hr>
          <p class="text-center">
            Programación Web
            <br/>
            Práctica 9
            <pre>
                <?php
                    print_r($_SESSION);
                ?>
            </pre>
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

  <!--Valida el formulario pais-->
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
                            message: 'El nombre es requerido.'
                        }
                    }
                },
                bandera: {
                    validators: {
                        file: {
                            extension: 'jpeg,png,jpg',
                            type: 'image/jpeg,image/png,image/jpg',
                            maxSize: 2048 * 1024,   // 2 MB
                            message: 'E archivo seleccionado no es valido'
                        }
                    }
                },
                id_continente: {
                    validators: {
                        integer: {
                            message: 'solo enteros'
                        }
                    }
                },
            }
        });
    });

  </script>

  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/bootstrapValidator.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap-datetimepicker.es.js"></script>




  </body>
 
</html>