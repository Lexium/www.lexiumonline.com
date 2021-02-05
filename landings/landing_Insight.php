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

    <link href="./css/custom_Insight.css" rel="stylesheet">

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
                    <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12 logo"><img src="images/logo_lexium_azul_2.png" class="img-fluid" title="LEXIUM" alt="LEXIUM"></div>

                </div>
            </div>
        </section>
        <section class="banner jumbotron d-flex align-items-center">
            <div class="container logo_noMovile">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <h1 class="prox-nov-reg mb-4">Capta más alumnos en<br/>tu institución educativa.</h1>
                        <h1 class="prox-nov-reg"><img src="images/Insight/logo_insight.png" class="img-fluid"></h1>
                        <h3 class="py-2 prox-nov-lt mb-4">Dirigido a Preparatorias y <br/>Universidades.</h3>
                    </div>
                </div>
            </div>
        </section>
        <div class="logo_movile">
            <img src="images/Insight/logo_insight.png" class="img-fluid">
            <div class="contenido_banner">
                <h3 class="m3-4">Capta más alumnos en<br/>tu institución educativa.</h3>
                <h5>Dirigido a Preparatorias y Universidades.</h3>
            </div>
        </div>

        <div class="generic_page">
            <section class="py-5 principal_container s1_landing">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="mb-4">Esta innovadora propuesta tiene como objetivo crear un vínculo entre la institución y el futuro alumno.</h3>
                            <h3 class="mb-5"><strong>Insight</strong> es un test sencillo, rápido y efectivo para lograr la mayor captación de alumnos.</h3>
                            <section class="row">
                                <div class="col-lg-5 text-center">
                                    <img src="images/Insight/ipad.jpg" class="img-fluid">
                                </div>
                                <div class="col-lg-7 d-flex align-items-center">
                                    <ul>
                                        <li class="d-flex align-items-center my-4">Se aplica en 20 min.</li>
                                        <li class="d-flex align-items-center my-4">Formato electrónico.</li>
                                        <li class="d-flex align-items-center my-4">Diagnóstico inmediato, útil y pertinente.</li>
                                    </ul>
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 s1_landing">
                            <div class="form_continer">
                                <b class="pb-3">Conoce la plataforma líder en aprendizaje.</b>
                                <form action="landing_general.php" method="POST" role="form" autocomplete="off" id="myForm">
                                    <input type="hidden" value="-1" name="validacion" id="validacion">

                                    <div class="input-group margin-bottom-sm">
                                      <span class="input-group-addon"><i class="fa fa-user-o fa-fw"></i></span>
                                      <input class="custom-form-control" type="text" placeholder="Nombre" name="nombre" id="nombre" value="<?php echo (isset($_POST ['nombre']) ? $_POST['nombre'] : ''); ?>">
                                        <?php if (array_key_exists('nombre', $has_error)): ?>
                                        <span class="text-danger has-error">
                                            <i><?php echo $has_error['nombre'] ?></i>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="input-group margin-bottom-sm">
                                      <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                                      <input class="custom-form-control" type="text" placeholder="Correo" id="email" name="email" value="<?php echo (isset($_POST ['email']) ? $_POST['email'] : ''); ?>">
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
                                    <div class="input-group margin-bottom-sm">
                                      <span class="input-group-addon"><i class="fa fa-list-ul fa-fw"></i></span>
                                      <select class="custom-form-control placeholder" id="cambiar">
                                          <option value="">Tipo de solicitud</option>
                                          <option value="Personal">Personal</option>
                                          <option value="Institucional">Institucional</option>
                                      </select>
                                    </div>
                                    <div class="institucional" style="display: none;">
                                        <div class="input-group margin-bottom-sm">
                                            <span class="input-group-addon"><i class="fa fa-building-o fa-fw"></i></span>
                                            <input class="custom-form-control" type="text" placeholder="Institución *" id="institucion" name="institucion" value="<?php echo (isset($_POST ['institucion']) ? $_POST['institucion'] : ''); ?>">
                                            <?php if (array_key_exists('institucion', $has_error)): ?>
                                            <span class="text-danger has-error">
                                                <i><?php echo $has_error['institucion'] ?></i>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="input-group margin-bottom-sm">
                                            <span class="input-group-addon"><i class="fa fa-briefcase fa-fw"></i></span>
                                            <input class="custom-form-control" type="text" placeholder="Puesto *" id="puesto" name="puesto" value="<?php echo (isset($_POST ['puesto']) ? $_POST['puesto'] : ''); ?>">
                                            <?php if (array_key_exists('puesto', $has_error)): ?>
                                            <span class="text-danger has-error">
                                                <i><?php echo $has_error['puesto'] ?></i>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="input-group margin-bottom-sm">
                                      <span class="input-group-addon"><i class="fa fa-comment-o fa-fw"></i></span>
                                      <input class="custom-form-control" type="text" placeholder="Mensaje" id="mensaje" name="mensaje" value="<?php echo (isset($_POST ['mensaje']) ? $_POST['mensaje'] : ''); ?>">
                                        <?php if (array_key_exists('mensaje', $has_error)): ?>
                                        <span class="text-danger has-error">
                                            <i><?php echo $has_error['mensaje'] ?></i>
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
        </div>


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
                            <li>Captación de alumnos.<br/><small>Incrementa la atracción de alumnado.</small></li>
                            <li>Institution branding.<br/><small>Crea un vínculo entre la institución y el prospecto.</small></li>
                            <li>Base de datos prospectos.<br/><small>Genera un banco de datos de futuros alumnos.</small></li>
                            <li>Información que genera valor.<br/><small>La información es de interés para el prospecto y su familia.</small></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5 s4_landing bg_gray">
            <div class="container text-center">
                <h1 class="pb-3">Historias de éxito</h1>
                <div class="row d-flex align-items-center">
                    <div class="col-6 col-sm-6 col-md-3"><img class="img-fluid" src="images/Insight/Universidad_Tecmilenio.png"></div>
                    <div class="col-6 col-sm-6 col-md-3"><img class="img-fluid" src="images/Insight/Universidad_La_Salle.png"></div>
                    <div class="col-6 col-sm-6 col-md-3"><img class="img-fluid" src="images/Insight/Universidad_Franco_Mexicana.png"></div>
                    <div class="col-6 col-sm-6 col-md-3"><img class="img-fluid" src="images/Insight/Instituto_Irapuato.png"></div>
                    <div class="col-6 col-sm-6 col-md-3"><img class="img-fluid" src="images/Insight/CECC.png"></div>
                    <div class="col-6 col-sm-6 col-md-3"><img class="img-fluid" src="images/Insight/CEUHZ.png"></div>
                    <div class="col-6 col-sm-6 col-md-3"><img class="img-fluid" src="images/Insight/UPAEP.png"></div>
                    <div class="col-6 col-sm-6 col-md-3"><img class="img-fluid" src="images/Insight/libre_de_negocios.png"></div>
                    <div class="col-6 col-sm-6 col-md-3"><img class="img-fluid" src="images/Insight/UC.png"></div>
                    <div class="col-6 col-sm-6 col-md-3"><img class="img-fluid" src="images/Insight/Prepa_Ibero.png" ></div>
                    <div class="col-6 col-sm-6 col-md-3"><img class="img-fluid" src="images/Insight/Universidad_Durango_Santander.png"></div>
                    <div class="col-6 col-sm-6 col-md-3"><img class="img-fluid" src="images/Insight/OAK.png"></div>
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
            $('select').change(function() {
                if ($(this).children('option:first-child').is(':selected')) {
                    $(this).addClass('placeholder');
                } else {
                    $(this).removeClass('placeholder');
                }
            });

            $('#cambiar').change(function(){
                var valorCambiado =$(this).val();
                if((valorCambiado == 'Institucional')){
                   $('.institucional').css('display','block');
                 }
                 else{
                    $('.institucional').css('display','none');
                 }
            });




            <?php $varLocation = 'https://www.lexiumonline.com/gracias.php'; ?>
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


    </body>
</html>