	
if (typeof jQuery === 'undefined') { throw new Error('Bootstrap\'s JavaScript requires jQuery') }

   
   <script type="text/javascript">
	 	$(document).ready(function)({
	 		$("accountForm").fancybox({
	 			'autoScale':false,
	 			'transitionIn':'none',
	 			'transitionOut':'none',
	 			'width':680,
	 			'height':450,
	 			'type':'iframe'
	 		});

	 	});
	 </script>

	  <script>
	 	$(document).ready(function)({
	 		$("accountForm").bootstrapValidator({
	 			feefbackIcons:{
	 				valid:'glyphicon glyphicon-ok',
	                invalid: 'glyphicon glyphicon-remove',
	                validating: 'glyphicon glyphicon-refresh'
           		 }
	 			}
	 		});

	 	});
	 </script>

	 <script>
	 	$(document).ready(function)({
	 		$('#fecha').bootstrapValidator({
         excluded: [':disabled'],
	 			feedbackIcons: {
		 			valid:'glyphicon glyphicon-ok',
		            invalid: 'glyphicon glyphicon-remove',
		            validating: 'glyphicon glyphicon-refresh'
	 		},
	 		fields: {
              meeting: {
                  validators: {
                      date: {
                          format: 'MM/DD/YYYY h:m A',
                          message: 'The value is not a valid date'
                      }
                  }
              }
          }
	 			
	 		});

	 	});
	 </script>	

  <script>
    $(document).ready(function)({
      $('#formconti').bootstrapValidator({
        excluded: [':disabled'],
        feedbackIcons: {
          valid:'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
      },
      fields: {
              nombre: {
                  validators: {
                      notEmpty: {
                          message: 'El nombre es requerido'
                      }
                  }
              }
          }
        
      });

    });
  </script>  

  <script>
    $(document).ready(function)({
      $('#formequi').bootstrapValidator({
        excluded: [':disabled'],
        feedbackIcons: {
          valid:'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
      },
      fields: {
              nombre: {
                  validators: {
                      notEmpty: {
                          message: 'El nombre es requerido'
                      }
                  }
              },
         
              idpais: {
                  validators: {
                      notEmpty: {
                          message: 'El idpais es requerido'
                      }
                  }
              },
              escudo: {
                  validators: {
                      notEmpty: {
                          message: 'El escudo es requerido'
                      }
                  }
              }
          }
        
      });

    });
  </script>  

   <script>
    $(document).ready(function)({
      $('#formesta').bootstrapValidator({
        excluded: [':disabled'],
        feedbackIcons: {
          valid:'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
      },
      fields: {
              Nombre: {
                  validators: {
                      notEmpty: {
                          message: 'El nombre es requerido'
                      }
                  }
              }
          }
        
      });

    });
  </script>

   <script>
    $(document).ready(function)({
      $('#forminte').bootstrapValidator({
        excluded: [':disabled'],
        feedbackIcons: {
          valid:'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
      },
      fields: {
              nombre: {
                  validators: {
                      notEmpty: {
                          message: 'El nombre es requerido'
                      }
                  }
              },
               apellido: {
                  validators: {
                      notEmpty: {
                          message: 'El apellido es requerido'
                      }
                  }
              },
               peso: {
                  validators: {
                      notEmpty: {
                          message: 'El peso es requerido'
                      }
                  }
              },
               estatura: {
                  validators: {
                      notEmpty: {
                          message: 'La estatura es requerida'
                      }
                  }
              },
               foto: {
                  validators: {
                      notEmpty: {
                          message: 'La fot} es requerida'
                      }
                  }
              },
               Edad: {
                  validators: {
                      notEmpty: {
                          message: 'La edad es requerida'
                      }
                  }
              },
               idequipo: {
                  validators: {
                      notEmpty: {
                          message: 'El idequipo es requerido'
                      }
                  }
              }
          }
        
      });

    });
  </script> 

  <script>
    $(document).ready(function)({
      $('#formpa').bootstrapValidator({
        excluded: [':disabled'],
        feedbackIcons: {
          valid:'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
      },
      fields: {
              nombre: {
                  validators: {
                      notEmpty: {
                          message: 'El nombre es requerido'
                      }
                  }
              },
              bandera: {
                  validators: {
                      notEmpty: {
                          message: 'La bandera es requerida'
                      }
                  }
              },
              idcontinente: {
                  validators: {
                      notEmpty: {
                          message: 'El continente es requerido'
                      }
                  }
              }
          }
        
      });

    });
  </script>   

  <script>
    $(document).ready(function)({
      $('#formpa').bootstrapValidator({
        excluded: [':disabled'],
        feedbackIcons: {
          valid:'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
      },
      fields: {
              nombre: {
                  validators: {
                      notEmpty: {
                          message: 'El nombre es requerido'
                      }
                  }
              },
              abreviatura: {
                  validators: {
                      notEmpty: {
                          message: 'La abreviatura es requerida'
                      }
                  }
              }
          }
        
      });

    });
  </script> 