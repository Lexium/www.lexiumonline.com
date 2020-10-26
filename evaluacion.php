<?php
$archivo_previo = 0;
include 'header.php' ?>
<div class="tools generic_page">
    <section class="b1_landing jumbotron post">
        <div class="x-space">
            <div class="row d-flex align-items-center">
                <div class="col-md-8 col-lg-6">
                    <h1><?php lang('eva_001');?></h1>
                    <p><?php lang('eva_002');?></p>
                </div>
                <div class="col-md-4 col-lg-6">
                    <img src="images/evaluacion/evaluacion.png" alt="<?php lang('eva_001');?>" title="<?php lang('eva_001');?>" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <section class="pt-5 principal_container">
        <div class="container">
            <h3 class="my-5"><?php lang('eva_003');?></h3>
            <?php include 'modelo_circulo.php' ?>
        </div>
    </section>
</div>
<?php include 'footer_interior.php' ?>
<?php include 'footer.php' ?>
