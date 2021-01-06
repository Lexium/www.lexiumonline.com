<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="//code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="js/conf.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit" async defer></script>
</head>
<div class="container">

<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.php">
      <img alt="Regresa al Menu de Selección" title="Regresa al Menu de Selección" src="../resources/images/logo_lexium_azul_160.png">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" id="link">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="nosotros.php">Nosotros</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Soluciones
        </a>
        <div class="dropdown-menu menusoluciones" aria-labelledby="navbarDropdown">
            
                  <div class="row">
                       <div class="col-md-4 col-12" style="text-align: center">
                            <a href="k9.php" style="color: #56c896!important">k-9</a>
                            <a class="dropdown-item" href="skillmap.php">Skill Map</a>
                            <a class="dropdown-item item2" href="evaluacion.php">Evaluación</a>
                            <a class="dropdown-item item2" href="diagnostico.php">Diagnóstico</a>
                            <a class="dropdown-item item2" href="herramientas.php">Herramientas</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="skillmaptrainingpu.php#trainig">Skill MT</a>
                            <a class="dropdown-item item2" href="skillmaptrainingpu.php#trainig">Entrenamiento</a>
                       </div>
                       <div class="col-md-4 col-12" style="text-align: center">
                            <a href="preparatoria.php" style="color: #9d71b8!important">Preparatoria / Universidad</a>
                            <a class="dropdown-item" href="skillmap.php">Skill Map</a>
                            <a class="dropdown-item item2" href="evaluacion.php">Evaluación</a>
                            <a class="dropdown-item item2" href="diagnostico.php">Diagnóstico</a>
                            <a class="dropdown-item item2" href="herramientas.php">Herramientas</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="skillmaptrainingpu.php">Skill MT</a>
                            <a class="dropdown-item item2" href="skillmaptrainingpu.php#trainig">Entrenamiento</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="captacion.php">Captación</a>
                            <a class="dropdown-item item2" href="captacion.php">Test rápido para</br> captar alumnos</a>
                             <div class="dropdown-divider"></div>
                             <a class="dropdown-item" href="admision.php">Admisión</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="sip.php">Sistema de ingreso </br>y permanencia</a>
                            <a class="dropdown-item item2" href="sip.php">Ingreso</a>
                            <a class="dropdown-item item2" href="sip.php">Guía vocacional</a>
                            <a class="dropdown-item item2" href="sip.php">Pronóstico de</br>permanencia</a>
                            <a class="dropdown-item item2" href="sip.php">Riesgo de abandono</a>
                       </div>
                       <div class="col-md-4 col-12" style="text-align: center">
                            <a href="consultor.php" style="color: #ec0b8d!important">Consultor/Orientador/</br>Psicopedagogo</a>
                            <a class="dropdown-item" href="skillmap.php">Skill Map</a>
                            <a class="dropdown-item item2" href="evaluacion.php">Evaluación</a>
                            <a class="dropdown-item item2" href="diagnostico.php">Diagnóstico</a>
                            <a class="dropdown-item item2" href="herramientas.php">Herramientas</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="skillmaptrainingpu.php#trainig">Skill MT</a>
                            <a class="dropdown-item item2" href="skillmaptrainingpu.php#trainig">Entrenamiento</a>
                       </div>
                  </div>
            
        </div>

      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Casos de éxito
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="clientes.php">Clientes</a>
          <a class="dropdown-item" href="testimoniales.php">Testimonos</a>
          <a class="dropdown-item" href="social.php">Apoyo social</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://blog.lexiumonline.com/">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contacto.php">Contacto</a>
      </li>
      <a class="nav-link imgmenu" href="https://lexiumlite.zohocommerce.com/"><img class="w-100" src="../resources/images/lexium-lite.png"></a>
    </ul>
  </div>
</nav>
</div>

</html>



