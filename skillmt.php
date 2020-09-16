<?php
$archivo_previo = 3;
include 'header.php' ?>
<div class="skillMap generic_page">
    <section class="b1_landing jumbotron post">
        <div class="x-space">
            <div class="row d-flex align-items-center">
                <div class="col-md-8 col-lg-6">
                    <h1><?php lang('SMT_001');?></h1>
                    <p><?php lang('SMT_002');?></p>
                </div>
                <div class="col-md-4 col-lg-6">
                    <img src="images/skillmt/avatar_header.png" alt="Avatar Header" title="Avatar Header" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 principal_container">
        <div class="container ">
            <h3 class="py-5"><?php lang('SMT_003');?></h3>
            <div class="row">
                <div class="col-sm-4">
                    <img class="img-fluid" src="images/skillmap/evaluacion_icon.png" alt="Evaluación" title="Evaluación">
                    <h5><?php lang('SMT_004');?></h5>
                    <p class="description"><?php lang('SMT_005');?></p>
                    <a href="evaluacion.php" class="btn btn-warning"><?php lang('CONOCE_MAS');?></a>
                </div>
                <div class="col-sm-4">
                    <img class="img-fluid" src="images/skillmap/diagnostico_icon.png" alt="Diagnóstico" title="Evaluación">
                    <h5><?php lang('SMT_006');?></h5>
                    <p class="description"><?php lang('SMT_007');?></p>
                    <a href="diagnostico.php" class="btn btn-warning"><?php lang('CONOCE_MAS');?></a>
                </div>
                <div class="col-sm-4">
                    <img class="img-fluid" src="images/skillmap/herramientas_icon.png" alt="Herramientas" title="Herramientas">
                    <h5><?php lang('SMT_008');?></h5>
                    <p class="description"><?php lang('SMT_009');?></p>
                    <a href="herramientas.php" class="btn btn-warning"><?php lang('CONOCE_MAS');?></a>
                </div>
                <a href="#!" name="trainig" id="trainig"></a>
                <div class="col-sm-12 mb-5">
                    <img class="img-fluid" src="images/skillmt/entrenamientos_icon.png" alt="entrenamientos_icon" title="entrenamientos_icon">
                    <h5><?php lang('SMT_010');?></h5>
                    <hr class="line" />
                </div>
                <div class="col-sm-4">
                    <a href="#!" data-toggle="modal" data-target="#DP" title="<?php lang('VER_VIDEO');?>">
                      <img class="img-fluid" src="images/skillmt/dp_icon.png" alt="dp_icon" title="Ver video de Programa de Desarrollo Personal">
                    </a>
                    <h5><?php lang('SMT_011');?></h5>
                    <p class="description"><?php lang('SMT_012');?></p>
                    <a href="#!" data-toggle="modal" data-target="#DP" title="<?php lang('VER_VIDEO');?>" class="btn btn-warning"><?php lang('VER_VIDEO');?></a>
                </div>
                <div class="col-sm-4">
                    <a href="#!" data-toggle="modal" data-target="#DC" title="<?php lang('VER_VIDEO');?>">
                      <img class="img-fluid" src="images/skillmt/dc_icon.png" alt="dc_icon" title="Ver video de Desarrollo de Competencias Docentes">
                    </a>
                    <h5><?php lang('SMT_013');?></h5>
                    <p class="description"><?php lang('SMT_014');?></p>
                    <a href="#!" data-toggle="modal" data-target="#DC" title="<?php lang('VER_VIDEO');?>" class="btn btn-warning"><?php lang('VER_VIDEO');?></a>
                </div>
                <div class="col-sm-4">
                    <a href="#!" data-toggle="modal" data-target="#PPC">
                      <img class="img-fluid" src="images/skillmt/ppc_icon.png" alt="ppc_icon" title="ppc_icon">
                    </a>
                    <h5><?php lang('SMT_015');?></h5>
                    <p class="description"><?php lang('SMT_016');?></p>
                    <a href="#!" data-toggle="modal" data-target="#PPC" title="<?php lang('VER_VIDEO');?>" class="btn btn-warning"><?php lang('VER_VIDEO');?></a>
                </div>
                <div class="col-sm-4">
                    <img class="img-fluid" src="images/skillmt/offline_icon.png" alt="offline_icon" title="Programa de Habilidades de Aprendizaje Ofﬂine">
                    <!--<a href="#!" data-toggle="modal" data-target="#Offline">
                      <img class="img-fluid" src="images/skillmt/offline_icon.png" alt="offline_icon" title="offline_icon">
                    </a>-->
                    <h5><?php lang('SMT_017');?></h5>
                    <p class="description"><?php lang('SMT_018');?></p>
                </div>
                <div class="col-sm-4">
                    <a href="#!" data-toggle="modal" data-target="#OP" title="<?php lang('VER_VIDEO');?>"><img class="img-fluid" src="images/skillmt/op_icon.png" alt="op_icon" title="Ver video de Orientación Profesional"></a>
                    <h5><?php lang('SMT_019');?></h5>
                    <p class="description"><?php lang('SMT_020');?></p>
                    <a href="#!" data-toggle="modal" data-target="#OP" title="<?php lang('VER_VIDEO');?>" class="btn btn-warning"><?php lang('VER_VIDEO');?></a>
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
        <h5 class="modal-title" id="individualLabel"><?php lang('SMT_011');?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe src="https://player.vimeo.com/video/379313906?title=0&byline=0" width="100%" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
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
        <h5 class="modal-title" id="individualLabel"><?php lang('SMT_015');?></h5>
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
        <h5 class="modal-title" id="individualLabel"><?php lang('SMT_017');?></h5>
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
        <h5 class="modal-title" id="individualLabel"><?php lang('SMT_019');?></h5>
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
