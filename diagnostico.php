<?php
$archivo_previo = 1;
include 'header.php' ?>
<div class="skillMap generic_page">
    <section class="b1_landing jumbotron post">
        <div class="x-space">
            <div class="row d-flex align-items-center">
                <div class="col-md-8 col-lg-6">
                    <h1><?php lang('dia_013');?></h1>
                    <p><?php lang('dia_014');?></p>
                </div>
                <div class="col-md-4 col-lg-6">
                    <img src="images/diagnostico/diagnostico.png" alt="<?php lang('dia_013');?>" title="<?php lang('dia_013');?>" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <section class="pt-5 principal_container">
        <div class="container">
            <h3 class="my-5"><?php lang('dia_015');?></h3>
            <div class="row">
                <div class="col-sm-4">
                    <img class="img-fluid" src="images/diagnostico/individual_icon.png" alt="<?php lang('dia_001');?>" title="<?php lang('dia_001');?>">
                    <h5><?php lang('dia_001');?></h5>
                    <p class="description"><?php lang('dia_002');?></p>
                    <a href="#!" class="btn btn-warning" data-toggle="modal" data-target="#individual"><?php lang('CONOCE_MAS');?></a>
                </div>
                <div class="col-sm-4">
                    <img class="img-fluid" src="images/diagnostico/ppa_icon.png" alt="<?php lang('dia_003');?>" title="<?php lang('dia_003');?>">
                    <h5><?php lang('dia_003');?></h5>
                    <p class="description"><?php lang('dia_004');?></p>
                    <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#PPA"><?php lang('CONOCE_MAS');?></a>

                </div>
                <div class="col-sm-4">
                    <img class="img-fluid" src="images/diagnostico/personalizado_icon.png" alt="<?php lang('dia_005');?>" title="<?php lang('dia_005');?>">
                    <h5><?php lang('dia_005');?></h5>
                    <p class="description"><?php lang('dia_006');?></p>
                    <a href="#!" class="btn btn-warning" data-toggle="modal" data-target="#personalizado"><?php lang('CONOCE_MAS');?></a>

                </div>


                <div class="col-sm-4">
                    <img class="img-fluid" src="images/diagnostico/grupal_icon.png" alt="<?php lang('dia_007');?>" title="<?php lang('dia_007');?>">
                    <h5><?php lang('dia_007');?></h5>
                    <p class="description"><?php lang('dia_008');?></p>
                    <a href="#!" class="btn btn-warning" data-toggle="modal" data-target="#grupal"><?php lang('CONOCE_MAS');?></a>
                </div>
                <div class="col-sm-4">
                    <img class="img-fluid" src="images/diagnostico/institucional_icon.png" alt="<?php lang('dia_009');?>" title="<?php lang('dia_009');?>">
                    <h5><?php lang('dia_009');?></h5>
                    <p class="description"><?php lang('dia_010');?></p>
                    <a href="#!" class="btn btn-warning" data-toggle="modal" data-target="#institucional"><?php lang('CONOCE_MAS');?></a>

                </div>
                <div class="col-sm-4">
                    <img class="img-fluid" src="images/diagnostico/comparativo_icon.png" alt="<?php lang('dia_011');?>" title="<?php lang('dia_011');?>">
                    <h5><?php lang('dia_011');?></h5>
                    <p class="description"><?php lang('dia_012');?></p>
                    <a href="#!" class="btn btn-warning" data-toggle="modal" data-target="#comparativo"><?php lang('CONOCE_MAS');?></a>

                </div>
            </div>
        </div>

    </section>
</div>

<!-- Modal Individual -->
<div class="modal fade" id="individual" tabindex="-1" role="dialog" aria-labelledby="individualLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="individualLabel"><?php lang('dia_001');?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <img class="img-fluid" src="images/diagnostico_individual.png" alt="Individual" title="Individual">
      </div>

    </div>
  </div>
</div>
<!-- Termina Modal Individual -->

<!-- Modal PPA -->
<div class="modal fade" id="PPA" tabindex="-1" role="dialog" aria-labelledby="ppaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ppaLabel"><?php lang('dia_003');?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="images/diagnostico_ppa.png" alt="Perﬁl y Potencial de Aprendizaje" title="Perﬁl y Potencial de Aprendizaje">
      </div>

    </div>
  </div>
</div>
<!-- Termina Modal PPA -->

<!-- Modal personalizado -->
<div class="modal fade" id="personalizado" tabindex="-1" role="dialog" aria-labelledby="personalizadoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="personalizadoLabel"><?php lang('dia_005');?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="images/diagnostico_personalizado.png" alt="Personalizado" title="Personalizado">
      </div>
    </div>
  </div>
</div>
<!-- Termina Modal personalizado -->

<!-- Modal Grupal -->
<div class="modal fade" id="grupal" tabindex="-1" role="dialog" aria-labelledby="GrupalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="GrupalLabel"><?php lang('dia_007');?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="images/diagnostico_grupal.png" alt="Grupal" title="Grupal">
      </div>

    </div>
  </div>
</div>
<!-- Termina Modal Grupal -->

<!-- Modal Institucional -->
<div class="modal fade" id="institucional" tabindex="-1" role="dialog" aria-labelledby="InstitucionalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="InstitucionalLabel"><?php lang('dia_009');?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="images/diagnostico_institucional.png" alt="Institucional" title="Institucional">
      </div>

    </div>
  </div>
</div>
<!-- Termina Modal Institucional -->

<!-- Modal Comparativo -->
<div class="modal fade" id="comparativo" tabindex="-1" role="dialog" aria-labelledby="ComparativoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ComparativoLabel"><?php lang('dia_011');?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="images/diagnostico_comparativo.png" alt="Comparativo" title="Comparativo">
      </div>

    </div>
  </div>
</div>
<!-- Termina Modal Comparativo -->

<?php include 'footer_interior.php' ?>
<?php include 'footer.php' ?>
