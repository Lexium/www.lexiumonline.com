<?php
$archivo_previo = '4';
include 'header.php' ?>
<div class="skillMap generic_page">
    <section class="b1_landing jumbotron post">
        <div class="x-space">
            <div class="row d-flex align-items-center">
                <div class="col-md-8 col-lg-6">
                    <h1><?php lang('skillmap_001');?></h1>
                    <p><?php lang('skillmap_002');?></p>
                </div>
                <div class="col-md-4 col-lg-6">
                    <img src="images/skillmap/avatar_header.png" alt="Avatar Header" title="Avatar Header" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container principal_container">
            <h3 class="py-5"><?php lang('skillmap_003');?></h3>
            <div class="row">
                <div class="col-sm-4">
                    <img class="img-fluid" src="images/skillmap/evaluacion_icon.png" alt="Evaluación" title="Evaluación">
                    <h5><?php lang('skillmap_004');?></h5>
                    <p class="description"><?php lang('skillmap_005');?></p>
                    <a href="evaluacion.php" class="btn btn-warning"><?php lang('CONOCE_MAS');?></a>
                </div>
                <div class="col-sm-4">
                    <img class="img-fluid" src="images/skillmap/diagnostico_icon.png" alt="Diagnóstico" title="Evaluación">
                    <h5><?php lang('skillmap_006');?></h5>
                    <p class="description"><?php lang('skillmap_007');?></p>
                    <a href="diagnostico.php" class="btn btn-warning"><?php lang('CONOCE_MAS');?></a>

                </div>
                <div class="col-sm-4">
                    <img class="img-fluid" src="images/skillmap/herramientas_icon.png" alt="Herramientas" title="Herramientas">
                    <h5><?php lang('skillmap_008');?></h5>
                    <p class="description"><?php lang('skillmap_009');?></p>
                    <a href="herramientas.php" class="btn btn-warning"><?php lang('CONOCE_MAS');?></a>

                </div>
            </div>
        </div>

    </section>
</div>
<?php include 'footer_interior.php' ?>
<?php include 'footer.php' ?>
