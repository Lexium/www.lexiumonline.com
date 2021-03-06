<?php include('email_contacto.php'); ?>
<!doctype html>

<html lang="en">

  <head>
<link rel="stylesheet" href="https://dppa.lexiumonline.com/plugins/font-awesome/4.7/css/font-awesome.min.css">

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">

    <link rel="icon" href="./favicon.ico">

    <title>LEXIUM</title>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127267171-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127267171-1');
</script>


    <!-- Bootstrap core CSS -->

    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <link href="./css/custom_estructura.css?123" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script
          src="https://code.jquery.com/jquery-3.4.1.js"
          integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
          crossorigin="anonymous"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>

		<script src="https://unpkg.com/@popperjs/core@2"></script>
</head>
    <body>

        <section class="header">
            <div class="container p-4 ">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6"><img src="images/logo_lexium_azul_2.png" class="img-fluid" title="LEXIUM" alt="LEXIUM"></div>
                </div>
            </div>
        </section>
        <section class="banner jumbotron d-flex align-items-center"  style="background-image:url(./images/reinventando_la_forma_de_aprender/bg_header.jpg); ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="prox-nov-reg">Re-inventando la<br/>
                          forma de aprender.</h1>
                        <h4 class="py-4 prox-nov-lt">Impulsamos a tu institución mapeando y desarrollando las habilidades de aprendizaje.</h4>
                    </div>
                    <div class="col-lg-6">

                    </div>
                </div>
            </div>
        </section>
        <section class="s1_landing py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h1 class="mb-5">Una plataforma. Todos los niveles educativos.</h1>
                        <ul>
                            <li id="button" role="tooltip"
                            	onmouseover="$('#tooltip').show();Popper.createPopper(button, tooltip, {placement: 'bottom',});"
                            	onmouseout="$('#tooltip').hide()"
                            	>Evaluación de habilidades de aprendizaje</li>
                            <li>Diagnóstico de habilidades</li>
                            <li>Herramientas de análisis y planeación</li>
                            <li>Entrenamiento para el desarrollo de habilidades</li>
                            <li>Sistema de ingreso y permanencia</li>
                        </ul>
                    </div>

					<div id="tooltip" role="tooltip" style="display:none">
						<ol>
							<li>Intelectuales</li>
							<li>Lectoras</li>
							<li>De estudio</li>
							<li>Socioemocionales</li>
						</ol>
					</div>
<script>
  const button = document.querySelector('#button');
  const tooltip = document.querySelector('#tooltip');

//  Popper.createPopper(button, tooltip, {placement: 'right',});
</script>

                    <div class="col-lg-5">
                        <div class="form_continer">
                            <b class="pb-3">Conoce la plataforma líder en aprendizaje.</b>
                            <form class="needs-validation" action="landing_general.php" method="POST" role="form" autocomplete="off" id="myForm">
                                <input type="hidden" value="-1" name="validacion" id="validacion">

                                <div class="input-group margin-bottom-sm">
                                  <span class="input-group-addon"><i class="fa fa-user-o fa-fw"></i></span>
                                  <input class="custom-form-control" required="true" type="text" placeholder="Nombre" name="nombre" id="nombre" value="<?php echo (isset($_POST ['nombre']) ? $_POST['nombre'] : ''); ?>">
                                    <?php if (array_key_exists('nombre', $has_error)): ?>
                                    <span class="text-danger has-error">
                                        <i><?php echo $has_error['nombre'] ?></i>
                                    </span>
                                    <?php endif; ?>
                                </div>

                                <div class="input-group margin-bottom-sm">
                                  <span class="input-group-addon"><i class="fa fa-building-o fa-fw"></i></span>
                                  <input class="custom-form-control" required="true" type="text" placeholder="Institución" id="institucion" name="institucion" value="<?php echo (isset($_POST ['institucion']) ? $_POST['institucion'] : ''); ?>">
                                    <?php if (array_key_exists('institucion', $has_error)): ?>
                                    <span class="text-danger has-error">
                                        <i><?php echo $has_error['institucion'] ?></i>
                                    </span>
                                    <?php endif; ?>
                                </div>

                                <div class="input-group margin-bottom-sm">
                                  <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                                  <input class="custom-form-control" required="true" type="email" placeholder="Correo" id="email" name="email" value="<?php echo (isset($_POST ['email']) ? $_POST['email'] : ''); ?>">
                                    <?php if (array_key_exists('email', $has_error)): ?>
                                    <span class="text-danger has-error">
                                        <i><?php echo $has_error['email'] ?></i>
                                    </span>
                                    <?php endif; ?>
                                </div>

                                <div class="input-group margin-bottom-sm">
                                  <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                                  <input class="custom-form-control" type="text" placeholder="Teléfono" id="telefono" name="telefono" value="<?php echo (isset($_POST ['telefono']) ? $_POST['telefono'] : ''); ?>">
                                    <?php if (array_key_exists('telefono', $has_error)): ?>
                                    <span class="text-danger has-error">
                                        <i><?php echo $has_error['telefono'] ?></i>
                                    </span>
                                    <?php endif; ?>
                                </div>

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
                                      <button type="submit" class="btn btn-warning">Solicita info</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5 bg_gray s2_landing">
            <div class="container">
                <h1 class="pt-3">Lexium en números…</h1>
                <div class="text-center">
                    <div class="row">
                        <div class=" col-6 col-md-3 col-lg-3 py-3">
                            <h3>30</h3>
                            <p class="num_margen">años en el mercado</p>
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 py-3">
                            <h3>+1000</h3>
                            <p class="num_margen">clientes</p>
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 py-3">
                            <h3>6</h3>
                            <p class="num_margen">países</p>
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 py-3">
                            <h3>+5</h3>
                            <p class="num_margen">Millones de personas evaluadas</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5 s3_landing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <img class="img-fluid" src="images/reinventando_la_forma_de_aprender/img_cuadros.jpg">
                    </div>
                    <div class="col-lg-6">
                    <p>&nbsp;</p>
                        <ul>
                            <li>Incrementa la captación y retención de alumnos.</li>
                            <li>Mejora la oferta académica.</li>
                            <li>Fortalece el prestigio de tu institución.</li>
                            <li>Aumenta las posibilidades de prosperar y ser feliz.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5 s3_landing bg_gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="mb-3" src="images/testimonail-dot.png"/>
                                    <p>Es una plataforma que ayuda a romper paradigmas, a fortalecer virtudes. Ofrecen un gran servicio ya que contamos con su apoyo en todo momento. Sería muy bueno que todos los colegios lo implementaran, es una herramienta muy muy fuerte.</p>
                                    <div class="name_container">
                                        <img class="img-fluid" src="images/Jacqueliene_Fournier.png" />
                                        <div class="title">
                                            <span>Jaqueline Fournier Hamz</span>
                                            <b>Liceo de Monterrey</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="mb-3" src="images/testimonail-dot.png"/>
                                    <p>
                                        La plataforma Lexium ha resultado ser la fórmula perfecta que faltaba para poder completar la ecuación. Nos ha dado esa parte medular.
                                    </p>
                                    <div class="name_container">
                                        <img class="img-fluid" src="images/Celeste_Cortes_Habitat.png"/>
                                        <div class="title">
                                            <span>Celeste Cortes</span>
                                            <b>Centro Escolar Hábitat S.C.</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="mb-3" src="images/testimonail-dot.png"/>
                                    <p>El trabajar con Lexium nos ha permitido desarrollar las habilidades en nuestros alumnos, estos conlleva a que ellos tengan un mejor desarrollo en todas sus capacidades y un mejor futuro.</p>
                                    <div class="name_container">
                                        <img class="img-fluid" src="images/Beatriz_Baez_LaPazPuebla.png"/>
                                        <div class="title">
                                            <span>Beatriz Báez López</span>
                                            <b>Instituto La Paz de Puebla</b>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img class="mb-3" src="images/testimonail-dot.png"/>
                                    <p>
                                        Lexium ha transformado el aprendizaje del instituto, nos ha dado un abanico de oportunidades que antes no se tenían, de poder ir siempre más allá, de crear aprendizajes nuevos y llevar a los alumnos a otro nivel.
                                    </p>
                                    <div class="name_container">
                                        <img class="img-fluid" src="images/Monica_Espinosa_JuarezLincoln.png"/>
                                        <div class="title">
                                            <span>Mónica Espinosa</span>
                                            <b>Instituto Juárez Lincoln</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            </ol>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img class="img-fluid" src="images/fotos_maestras.png">
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container p-3">
                <div class="row">
                    <div class="col-md-12" style="text-align:center">All rights reserved © <?php 
                    $Year = date("Y");
                    echo "$Year";
                    echo "\n";
                    ?>  by LEXIUM</div>
                </div>
            </div>
        </footer>

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