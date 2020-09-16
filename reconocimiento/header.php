<?php include '../lang/idioma.php';?>
<!doctype html>
<html lang="en">
  <head>
<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127267171-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-127267171-1');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">
    <title><?php lang('TITULO_SITIO');?></title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/carousel.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
    <!--<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700,800,900&display=swap" rel="stylesheet">-->
    <link href="../css/owl.carousel.css" rel="stylesheet">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <link href="../css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../bower_components/toastr/toastr.min.css"/>
    <!--recaptcha-->
    <script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit" async defer></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-blue">
      <a class="navbar-brand" href="../index.php"><img src="../images/logo_lexium.png" class="img-fluid"></a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbarCollapse" style="">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.php"><?php lang('Inicio');?> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../nosotros.php"><?php lang('Nosotros');?></a>
          </li>
          <li class="nav-itemdropdown" style="position: relative;">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php lang('Soluciones');?></a>
              <div class="dropdown-menu sub-menu-bg-blue" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="../skillmap.php">» <?php lang('Skill Map');?></a>
                <ul>
                  <li><a href="../evaluacion.php"><?php lang('Evaluaciones');?></a></li>
                  <li><a href="../diagnostico.php"><?php lang('Diagnóstico');?></a></li>
                  <li><a href="../herramientas.php"><?php lang('Herramientas');?></a></li>
                </ul>
                <a class="dropdown-item" href="../skillmt.php">» <?php lang('Skill Map & Training');?></a>
                <ul>
                  <li><a href="../skillmap.php"><?php lang('Skill Map');?></a></li>
                  <li><a href="../skillmt.php#trainig"><?php lang('Entrenamiento');?></a></li>
                </ul>
                <a class="dropdown-item" href="../sip.php">» <?php lang('Sistema_de_Ingreso');?></a>
                <ul>
                  <li><a href="../sip.php"><?php lang('Admisión');?></a></li>
                  <li><a href="../sip.php"><?php lang('Guía vocacional');?></a></li>
                  <li><a href="../sip.php"><?php lang('Pronóstico de permanencia');?></a></li>
                  <li><a href="../sip.php"><?php lang('Riesgo de abandono');?></a></li>
                </ul>
              </div>
          </li>
          <li class="nav-itemdropdown" style="position: relative;">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php lang('Casos de éxito');?></a>
              <div class="dropdown-menu sub-menu-bg-blue" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="../confianza.php">» <?php lang('Clientes');?></a>
                <a class="dropdown-item" href="../nuestros_clientes_opinan.php">» <?php lang('Testimonios');?></a>
                <a class="dropdown-item" href="../valores.php">» <?php lang('Apoyo Social');?></a>
              </div>
          </li>
          <!--<li class="nav-item">
              <a class="nav-link" href="">Lexium Partner</a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="http://blog.lexiumonline.com/"><?php lang('Blog');?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contacto.php"><?php lang('Contacto');?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://lexiumlite.zohocommerce.com/">
              <img height="25px" src="../images/lexium-lite_blanco.png" />
            </a>
          </li>
        </ul>
      </div>
    </nav>
