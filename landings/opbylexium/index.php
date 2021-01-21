<?php include('email_contacto.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
	<link href="https://dppa.lexiumonline.com/favicon.ico" rel="shorcut icon">
	<title>OP by Lexium</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
     <script
          src="https://code.jquery.com/jquery-3.4.1.js"
          integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
          crossorigin="anonymous"></script>
</head>
<body>
	<div class="cabezal">
         <header class="header-op">
     	         <div class="row">
                      <div class="col-md-3 col-5 logo-lexium">
                           <img class="img-fluid" src="img/logo-lexium.png" >	
                      </div>
                      <div class="col-md-6 col-2"></div>
                      <div class="col-md-3 col-5 logo-op" style="">
                           <img class="img-fluid" src="img/logo-op.png">	
                      </div>
     	         </div>
         </header>
    </div>
    <section class="bg1" style="background-image: url(img/bg-12.png);">
    	    <div class="container-fluid">
                 <div class="text">
    	     	      <h1>Conócete,</h1>
    	     	      <h4>reflexiona y decide</h4>
    	     	      <h2>Tu carrera</h2>
    	     	      <h4>Programa de orientación profesional</h4>
    	        </div>
            </div>
    </section>

    <section class="whatis">
    	<div class="container-fluid">
    	   <h1>¿Que es <img class="img-fluid" src="img/logo-op.png">?</h1>
    	   <img class="img-fluid chica" src="img/girl.png">
           <span>Es un innovador Programa de Orientación Profesional respaldado por la experiencia de Lexium, líder en procesos educativos presenciales y on line.</span>
           <div class="contenidowhat">
                <div class="points">
           	         <img class="img-fluid" src="img/icono-1.png">
           	         <p>Evaluaciones con diagnóstico <br>inmediato.</p>
                </div>
                <div class="points">
                	 <img class="img-fluid" src="img/icono-2.png">
                	 <p>Desarrollo de un útil plan de <br> vida y carrera.</p>
                </div>
                <div class="points">
                	 <img class="img-fluid" src="img/icono-3.png">
                	 <p>Un programa muy enfocado <br>que te invita a la reflexión.</p>
                </div>
                <div class="points">
                	 <img class="img-fluid" src="img/icono-4.png">
                	 <p>Metodología para que tomes <br>la mejor decisión.</p>
                </div>
           </div>
    	</div>	
    </section>


    <section class="bg1" style="background-image: url(img/bg-2.png);">
    	     <div class="text2">
    	     	   <h1>Sabías <br>que...</h1>
    	     	   <p>una gran parte de estudiantes <br>entran en conflictos internos <br>al <b>no tener claro su rumbo <br>profesional.</b></p>
    	     </div>
    	     <div class="frase">
    	     	  <h1>¡INFORMACIÓN ESTADÍSTICA!</h1>
    	     </div>
    </section>

    <section class="datacontact" style="background-image: url(img/bg-3.png)">
    	     <div class="container">
    	     	  <div class="row">
                       <div class="infocontact">
                       	    <p>• Equipo de asesores educativos <br>especializados.</p>
                       	    <p>• Plataforma innovadora fácil de <br>navegar e intuitiva.</p>
                       	    <p>• Soporte y asesoría uno a uno.</p>
                       	    <p>• Resultados garantizados.</p>
                       </div>
                       <div class="contactcontact">
							              <form action="index.php" class="needs-validation" method="POST" role="form" autocomplete="off" id="myForm">
                                <input type="hidden" value="-1" name="validacion" id="validacion">
                                <div class="form-group" style="margin: 10px">
                                     <div class="input-group mb-3">
                                          <input class="form-control" required="true" type="text" placeholder="Nombre" name="nombre" id="nombre" value="<?php echo (isset($_POST ['nombre']) ? $_POST['nombre'] : ''); ?>">
                                          <?php if (array_key_exists('nombre', $has_error)): ?>
                                          <span class="text-danger has-error">
                                                <i><?php echo $has_error['nombre'] ?></i>
                                           </span>
                                          <?php endif; ?>
                                     </div>
                                   
                                     <div class="input-group  mb-3">
        								                  <input class="form-control" required="true" type="email" placeholder="Correo" id="email" name="email" value="<?php echo (isset($_POST ['email']) ? $_POST['email'] : ''); ?>">
                                          <?php if (array_key_exists('email', $has_error)): ?>
                                          <span class="text-danger has-error">
                                                <i><?php echo $has_error['email'] ?></i>
                                          </span>
                                          <?php endif; ?>
                                     </div>

                                     <div class="input-group  mb-3">
        								                  <input class="form-control" type="text" placeholder="Teléfono" id="telefono" name="telefono" value="<?php echo (isset($_POST ['telefono']) ? $_POST['telefono'] : ''); ?>">
                                          <?php if (array_key_exists('telefono', $has_error)): ?>
                                          <span class="text-danger has-error">
                                              <i><?php echo $has_error['telefono'] ?></i>
                                          </span>
                                          <?php endif; ?>
                                     </div>
                                    
        								             <input class="form-control" type="hidden" placeholder="Asunto" id="asunto" name="subject" value="OP by Lexium">
                                     
                                     <div class="input-group  mb-3">
                                          <textarea class="form-control" name="mensaje" rows="5" placeholder="Mensaje"><?php echo (isset($_POST ['mensaje']) ? $_POST['mensaje'] : ''); ?></textarea>
                                           <?php if (array_key_exists('mensaje', $has_error)): ?>
                                             <span class="text-danger has-error">
                                               <i><?php echo $has_error['mensaje'] ?></i>
                                             </span>
                                           <?php endif; ?>
                                     </div>
                                
                                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="form-group text-center">
                                    <?php
                                    $THE_REFER = '';
                                    if (isset($_SERVER['HTTP_REFERER']))
                                    {
                                        $THE_REFER=$_SERVER['HTTP_REFERER'];
                                    }
                                    ?>
                                      <input type="hidden" name="Plataforma" value="<?php echo $THE_REFER;?>">
                                      <input type="hidden" name="completo" value="1">
                                      <button type="submit" class="btn contactobtn">Contactar</button>
                                </div>
                            </form>
                       </div>
    	     	  </div>	
    	     </div>
    </section>
        <script type="text/javascript">
            <?php $varLocation = 'https://www.lexiumonline.com/gracias2.php'; ?>
            $(document).ready(function () {
            var tksLocation = '<?php echo $varLocation; ?>';
            $("#validacion").val("<?php echo date("d");?>");
                <?php if(isset($success) and $success):?>
                        //toastr["success"]("Pronto estaremos en contacto contigo!", "Hemos recibido tu mensaje");
                        location.href = tksLocation;
                        $("form").find('input:text,textarea').val('');
                        $("form").find('input:checkbox').removeAttr('checked').removeAttr('selected');
                        $('#myForm').trigger("reset");
                <?php elseif(isset($success) and !$success):?>
                        //toastr["error"]("Ocurrió un error.", "Tu mensaje no pudo ser enviado");
                        alert("Ocurrió un error.", "Tu mensaje no pudo ser enviado");
                        $('#myForm').trigger("reset");
                <?php endif;?>
            });


        </script>

        <script type="text/javascript">
            $( document ).ready(function() {
                // Que haga trim en cada campo al salir de el
                $( "input[type=text], input[type=email]" ).blur(function() {
                  $( this ).val( $( this ).val().trim());
                });
            });
        </script>
</body>
</html>