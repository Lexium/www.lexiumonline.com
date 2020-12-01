<?php
$archivo_previo = __FILE__;
include 'header.php' ?>
<body>
	  <div class="gral">
	    <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
          <source src="resources/bg.mp4" type="video/mp4">
        </video>
        <div class="container2 h-100  d-flex align-items-center justify-content-center ">
          <div class="h-70 w-100 text-center selectbox">
            <div class="texbox w-100 h-75">
                 <div class="imgbox"> 
                    <img src="resources/images/logo_lexium_azul_160.png" alt="Lexium Logo" title="Lexium Logo">
                 </div>
                 <h5 class="display-5">Sonríe, has encontrado la plataforma más eficiente para impulsar el aprendizaje</h5>
                 <h5 class="display-5">Selecciona la opción deseada</h5>
                 <a type="button" href="k9.php" class="w-75 btn btn-primary" id="k9"> Institución educativa (K-9) </a>
                 <a type="button" href="preparatoria.php" class="w-75 btn btn-primary" id="pu"> Preparatoria / Universidad </a>
                 <a type="button" href="consultor.php" class="w-75 btn btn-primary" id="cop"> Consultor/ Orientador/ Psicopedagogo </a> 
            </div>
          </div>
        </div>
    </div>
</body>
</html>