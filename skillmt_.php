<?php
$archivo_previo = 3;
include 'header.php' ?>
<div class="skillMap generic_page">
    <section class="b1_landing jumbotron post">
        <div class="x-space">
            <div class="row d-flex align-items-center">
                <div class="col-md-8 col-lg-6">
                    <h1>Skill Map & Training</h1>
                    <p>Enriquece al SkillMap incorporando un entrenamiento modular y personalizado dirigido al desarrollo y mejora de las habilidades de aprendizaje.</p>
                </div>
                <div class="col-md-4 col-lg-6">
                    <img src="images/skillmt/avatar_header.png" alt="Avatar Header" title="Avatar Header" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 principal_container">
        <div class="container ">
            <h3 class="py-5">Skill Map & Training tu mejor opción para que cada estudiante alcance su máximo potencial.</h3>
            <div class="row">
                <div class="col-sm-4">
                    <img class="img-fluid" src="images/skillmap/evaluacion_icon.png" alt="Evaluación" title="Evaluación">
                    <h5>Evaluación</h5>
                    <p class="description">Elige entre más de 20 evaluaciones que permiten mapear el perﬁl de aprendizaje de los alumnos y de la comunidad educativa.</p>
                    <a href="evaluacion.php" class="btn btn-warning">Conoce más</a>
                </div>
                <div class="col-sm-4">
                    <img class="img-fluid" src="images/skillmap/diagnostico_icon.png" alt="Diagnóstico" title="Evaluación">
                    <h5>Diagnóstico</h5>
                    <p class="description">Apóyate en una plataforma diagnóstica que contiene el DNA de las habilidades de aprendizaje con las que cuenta tu comunidad educativa.</p>
                    <a href="diagnostico.php" class="btn btn-warning">Conoce más</a>
                </div>
                <div class="col-sm-4">
                    <img class="img-fluid" src="images/skillmap/herramientas_icon.png" alt="Herramientas" title="Herramientas">
                    <h5>Herramientas</h5>
                    <p class="description">Propicia y crea ambientes de aprendizaje efectivos con apoyo de las herramientas de análisis y planeación.</p>
                    <a href="herramientas.php" class="btn btn-warning">Conoce más</a>
                </div>
                <a href="#!" name="trainig" id="trainig"></a>
                <div class="col-sm-12 mb-5">
                    <img class="img-fluid" src="images/skillmt/entrenamientos_icon.png" alt="entrenamientos_icon" title="entrenamientos_icon">
                    <h5>Training</h5>
                    <hr class="line" />
                </div>
                <div class="col-sm-4">
                    <a href="#!" data-toggle="modal" data-target="#DP" title="Ver video">
                      <img class="img-fluid" src="images/skillmt/dp_icon.png" alt="dp_icon" title="Ver video de Programa de Desarrollo Personal">
                    </a>
                    <h5>Programa de Desarrollo Personal</h5>
                    <p class="description">Desarrolla las habilidades de aprendizaje con un entrenamiento electrónico, modular, y personalizado que ha probado su eﬁcacia con miles de alumnos.</p>
                    <a href="#!" data-toggle="modal" data-target="#DP" title="Ver video" class="btn btn-warning">Ver video</a>
                </div>
                <div class="col-sm-4">
                    <img class="img-fluid" src="images/skillmt/dc_icon.png" alt="dc_icon" title="Desarrollo de Competencias Docentes">
                    <!--<a href="#!" data-toggle="modal" data-target="#DC" title="Ver video">
                      <img class="img-fluid" src="images/skillmt/dc_icon.png" alt="dc_icon" title="Ver video de Desarrollo de Competencias Docentes">
                    </a>-->
                    <h5>Desarrollo de Competencias Docentes</h5>
                    <p class="description">Incrementa signiﬁcativamente las habilidades docente de enseñanza – aprendizaje con este diplomado.</p>
                </div>
                <div class="col-sm-4">
                    <a href="#!" data-toggle="modal" data-target="#PPC">
                      <img class="img-fluid" src="images/skillmt/ppc_icon.png" alt="ppc_icon" title="ppc_icon">
                    </a>
                    <h5>Programa de Potenciador de Competencias</h5>
                    <p class="description">Potencia las competencias personales, interpersonales, de aprendizaje y de manejo de la información de los alumnos.</p>
                    <a href="#!" data-toggle="modal" data-target="#PPC" title="Ver video" class="btn btn-warning">Ver video</a>
                </div>
                <div class="col-sm-4">
                    <img class="img-fluid" src="images/skillmt/offline_icon.png" alt="offline_icon" title="Programa de Habilidades de Aprendizaje Ofﬂine">
                    <!--<a href="#!" data-toggle="modal" data-target="#Offline">
                      <img class="img-fluid" src="images/skillmt/offline_icon.png" alt="offline_icon" title="offline_icon">
                    </a>-->
                    <h5>Programa de Habilidades de Aprendizaje Ofﬂine</h5>
                    <p class="description">Construye la inteligencia emocional, las habilidades lectoras y las habilidades cognitivas a través de estos programas.</p>
                </div>
                <div class="col-sm-4">
                    <a href="#!" data-toggle="modal" data-target="#OP" title="Ver video"><img class="img-fluid" src="images/skillmt/op_icon.png" alt="op_icon" title="Ver video de Orientación Profesional"></a>
                    <h5>Orientación Profesional</h5>
                    <p class="description">Obtén grandes beneﬁcios para tus alumnos en autoconocimiento, automotivación y autodirección al trabajar con esta propuesta de OP que ha sido probada por cientos jóvenes.</p>
                    <a href="#!" data-toggle="modal" data-target="#OP" title="Ver video" class="btn btn-warning">Ver video</a>
                </div>
            </div>

        </div>

    </section>
</div>
<!-- Modal Video -->
<div class="modal fade" id="DP" tabindex="-1" role="dialog" aria-labelledby="individualLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="individualLabel">Programa de Desarrollo Personal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <iframe src="https://player.vimeo.com/video/365836245?title=0&byline=0" width="100%" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
<!-- Termina Modal Video -->
<!-- Modal Video -->
<div class="modal fade" id="DC" tabindex="-1" role="dialog" aria-labelledby="individualLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="individualLabel">Desarrollo de Competencias Docentes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>

    </div>
  </div>
</div>
<!-- Termina Modal Video -->
<!-- Modal Video -->
<div class="modal fade" id="PPC" tabindex="-1" role="dialog" aria-labelledby="individualLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="individualLabel">Programa de Potenciador de Competencias</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <iframe src="https://player.vimeo.com/video/380284937?title=0&byline=0" width="100%" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
      </div>

    </div>
  </div>
</div>
<!-- Termina Modal Video -->
<!-- Modal Video -->
<div class="modal fade" id="Offline" tabindex="-1" role="dialog" aria-labelledby="individualLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="individualLabel">Programa de Habilidades de Aprendizaje Ofﬂine</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>

    </div>
  </div>
</div>
<!-- Termina Modal Video -->
<!-- Modal Video -->
<div class="modal fade" id="OP" tabindex="-1" role="dialog" aria-labelledby="individualLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="individualLabel">Orientación Profesional</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <iframe width="100%" height="360" src="https://www.youtube.com/embed/6jjhP1-qSuY?controls=0&amp;start=2" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>

    </div>
  </div>
</div>
<!-- Termina Modal Video -->
<?php include 'footer_interior.php' ?>
<?php include 'footer.php' ?>
