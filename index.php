<?php include 'header.php';?>
    <section class="b1_landing jumbotron post">
        <div class="x-space">
            <div class="row d-flex align-items-center">
                <div class="col-md-8 col-lg-6">
                    <h1><?php lang('index_001');?></h1>
                    <form class="pt-5 pb-3 form" method="post" action="contacto.php">
                        <div class="form-row align-items-center">
                            <div class="col-auto">
                                <input type="text" name="name" class="form-control mb-4" id="inlineFormInput" placeholder="<?php lang('Nombre');?> *" required />
                            </div>
                            <div class="col-auto">
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control mb-4" id="inlineFormInputGroup" placeholder="Email *" required />
                                </div>
                            </div>
                            <div class="col-auto">
                                <input type="hidden" name="completo" value="0">
                                <button type="submit" class="btn btn-primary mb-4" style="margin-top:0"><?php lang('Solicitar Demo');?></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 col-lg-6">
                    <img src="images/impulsa_el_potencial.png" class="img-fluid" alt="<?php lang('index_067');?>" title="<?php lang('index_067');?>" />
                </div>
            </div>
        </div>
    </section>
     <!--<section class="b2_landing py-5">
        <div class="container">
           <h2 class="mb-5">La confianza se refleja en nuestros clientes:</h2>
            <div class="owl-carousel owl-theme clients">
                <div class="item d-flex align-items-center">
                    <a href="https://upaep.mx/" target="new" border="0">
                        <img class="img-fluid" src="images/colegios/upaep.jpg" alt="UPAEP" title="UPAEP">
                    </a>
                </div>
                <div class="item d-flex align-items-center">
                    <a href="https://www.colegioslasalle.edu.mx/" target="new" border="0">
                        <img class="img-fluid" src="images/colegios/la_salle.jpg" alt="La Salle" title="La Salle">
                    </a>
                </div>
                <div class="item d-flex align-items-center">
                    <a href="https://www.mazenod.edu.mx/" target="new" border="0">
                        <img class="img-fluid" src="images/colegios/mazenod.jpg" alt="Colegio Mazenod" title="Colegio Mazenod">
                    </a>
                </div>
                <div class="item d-flex align-items-center">
                    <a href="https://ieu.edu.mx/" target="new" border="0">
                        <img class="img-fluid" src="images/colegios/IEU.jpg" alt="IEU Universidad" title="IEU Universidad">
                    </a>
                </div>
                <div class="item d-flex align-items-center">
                    <a href="https://www.semperaltius.edu.mx/" target="new" border="0">
                        <img class="img-fluid" src="images/colegios/legion.jpg" alt="Red de Colegios" title="Red de Colegios">
                    </a>
                </div>
                <div class="item d-flex align-items-center">
                    <a href="http://www.tonalli.edu.mx/" target="new" border="0">
                        <img class="img-fluid" src="images/colegios/tonalli.jpg" alt="Tonalli" title="Tonalli">
                    </a>
                </div>
                <div class="item d-flex align-items-center">
                    <a href="https://ibime.edu.mx/" target="new" border="0">
                        <img class="img-fluid" src="images/colegios/ibime.jpg" alt="Ibime" title="Ibime">
                    </a>
                </div>
                <div class="item d-flex align-items-center">
                    <a href="https://ibero.mx/prepa-ibero" target="new" border="0">
                        <img class="img-fluid" src="images/colegios/ibero.jpg" alt="Prepa Ibero" title="Prepa Ibero">
                    </a>
                </div>
                <div class="item d-flex align-items-center">
                    <a href="https://universidadceuhz.edu.mx/" target="new" border="0">
                        <img class="img-fluid" src="images/colegios/ceuhz.jpg" alt="CEUHZ Campus Universitario" title="CEUHZ Campus Universitario">
                    </a>
                </div>
                <div class="item d-flex align-items-center">
                    <a href="https://www.colegiomigueldecervantes.mx/" target="new" border="0">
                        <img class="img-fluid" src="images/colegios/cervantes.jpg" alt="Colegio Cervantes" title="Colegio Cervantes">
                    </a>
                </div>
                <div class="item d-flex align-items-center">
                    <a href="https://www.julesverneschool.edu.mx/" target="new" border="0">
                        <img class="img-fluid" src="images/colegios/jules_verne.png" alt="Jules Verne School" title="Jules Verne School">
                    </a>
                </div>
                <div class="item d-flex align-items-center">
                    <a href="http://tecmilenio.mx/es" target="new" border="0">
                        <img class="img-fluid" src="images/colegios/tec_milenio.jpg" alt="Tec Milenio" title="Tec Milenio">
                    </a>
                </div>
                <div class="item d-flex align-items-center">
                    <a href="http://www.juarezlincoln.com/" target="new" border="0">
                        <img class="img-fluid" src="images/colegios/ijl.jpg" alt="Instituto Juárez Lincoln" title="Instituto Juárez Lincoln ">
                    </a>
                </div>
                <div class="item d-flex align-items-center">
                    <a href="https://sites.google.com/nikolatesla.edu.mx/home/home" target="new" border="0">
                        <img class="img-fluid" src="images/colegios/cnt.jpg?2" alt="Colegio Nikola Tesla" title="Colegio Nikola Tesla">
                    </a>
                </div>
                <div class="item d-flex align-items-center">
                    <a href="https://www.institutolapazdepuebla.edu.mx/" target="new" border="0">
                        <img class="img-fluid" src="images/colegios/ipp.jpg" alt="Instituto La Paz de Puebla" title="Instituto La Paz de Puebla">
                    </a>
                </div>
                <div class="item d-flex align-items-center">
                    <a href="https://www.imaoccidente.edu.mx/" target="new" border="0">
                        <img class="img-fluid" src="images/colegios/miguel-angel.jpg" alt="Instituto Migel Angel de occidente" title="Instituto Migel Angel de occidente">
                    </a>
                </div>
                <div class="item d-flex align-items-center">
                    <a href="https://www.secundariatec.edu.mx/" target="new" border="0">
                        <img class="img-fluid" src="images/colegios/SecundariaTEC.jpg" alt="Secundaria TEC de Monterrey" title="Secundaria TEC de Monterrey">
                    </a>
                </div>
                <div class="item d-flex align-items-center">
                    <a href="http://www.liceo.edu.mx/" target="new" border="0">
                        <img class="img-fluid" src="images/colegios/liceo-monterrey.jpg" alt="Liceo de monterrey" title="Liceo de monterrey">
                    </a>
                </div>

                <div class="item d-flex align-items-center">
                    <a href="http://www.carlosdarwin.edu.mx/" target="new" border="0">
                        <img class="img-fluid" src="images/colegios/darwin.jpg" alt="Secundaria Bilingüe Carlos Darwin" title="Secundaria Bilingüe Carlos Darwin">
                    </a>
                </div>
                <div class="item d-flex align-items-center">
                    <a href="http://www.elcamino.edu.mx/" target="new" border="0" style="margin:auto;">
                        <img class="img-fluid" src="images/colegios/elcamino.jpg" alt="Colegio El Camino" title="Colegio El Camino">
                    </a>
                </div>
                <div class="item d-flex align-items-center">
                    <a href="https://colegiovizcainas.edu.mx/" target="new" border="0">
                        <img class="img-fluid" src="images/colegios/vizcainas.jpg" alt="Colegio Vizcaínas" title="Colegio Vizcaínas">
                    </a>
                </div>
                <div class="item d-flex align-items-center">
                    <a href="http://www.ipia.edu.mx/" target="new" border="0">
                        <img class="img-fluid" src="images/colegios/ipia.jpg" alt="IPIA, Instituto Pedagógico Iberoamericano A.C" title="IPIA, Instituto Pedagógico Iberoamericano A.C">
                    </a>
                </div>
                <div class="item d-flex align-items-center">
                    <a href="https://www.centroescolarhabitat.edu.mx/" target="new" border="0">
                        <img class="img-fluid" src="images/colegios/habitat.jpg" alt="Centro Escolar Hábitat" title="Centro Escolar Hábitat">
                    </a>
                </div>
                <div class="item d-flex align-items-center">
                    <a href="http://lea.hopto.org/" target="new" border="0" style="margin:auto;">
                        <img class="img-fluid" src="images/colegios/emperdadores.jpg" alt="Liceo Emperadores Aztecas" title="Liceo Emperadores Aztecas">
                    </a>
                </div>
            </div>
        </div>
    </section>-->
    <section class="b4_landing py-5">
        <div class="container">
            <h2 class="mb-3"><?php lang('index_002');?></h2>
            <ul class="description">
                <li><?php lang('index_003');?></li>
                <li><?php lang('index_004');?></li>
                <li><?php lang('index_005');?></li>
                <li><?php lang('index_006');?></li>
            </ul>
        </div>
    </section>
    <section class="b3_landing bg_gray py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="images/exploring_learning_for_better_people.png" alt="Exploring learning for better people" title="Exploring learning for better people">
                </div>
                <div class="col-md-8">
                    <div class="text">
                        <h2 class="mb-3"><?php lang('index_007');?></h2>
                        <p><?php lang('index_008');?></p>
                        <a class="btn btn-primary" data-toggle="modal" data-target="#video"><?php lang('Ver video');?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="b4_landing  py-5">
        <div class="container">
            <h2 class="mb-3"><?php lang('Soluciones');?></h2>
            <p class=" description mb-5"><?php lang('index_009');?></p>
            <div class="row text-center">
                <div class="col-md-6">
                    <a href="skillmap.php">
                        <img class="img-fluid mb-4" src="images/skill_map.png" alt="<?php lang('Skill Map');?>" title="<?php lang('Skill Map');?>">
                    </a>
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="evaluacion.php">
                                <img class="img-fluid" src="images/evaluacion_icon.png" alt="<?php lang('Evaluación');?>" title="<?php lang('Evaluación');?>">
                                <b><?php lang('Evaluación');?></b>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="diagnostico.php">
                                <img class="img-fluid" src="images/diagnostico_icon.png" alt="<?php lang('Diagnóstico');?>" title="<?php lang('Diagnóstico');?>">
                                <b><?php lang('Diagnóstico');?></b>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="herramientas.php">
                                <img class="img-fluid" src="images/herramientas_icon.png" alt="<?php lang('Herramientas');?>" title="<?php lang('Herramientas');?>">
                                <b><?php lang('Herramientas');?></b>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content">
                        <a href="skillmt.php">
                            <img class="img-fluid mb-4" src="images/skill_mt.png" alt="Skill MT" title="Skill MT">
                        </a>
                        <div class="row d-flex align-items-center">
                            <div class="col-sm-6">
                                <a href="skillmap.php">
                                    <img class="img-fluid" src="images/skill_map.png" alt="<?php lang('Skill Map');?>" title="<?php lang('Skill Map');?>">
                                </a>
                            </div>
                            <div class="col-sm-2"><img src="images/plus.png" alt="<?php lang('Skill Map');?>" title="<?php lang('Skill Map');?>" class="my-2"></div>
                            <div class="col-sm-4">
                                <a href="skillmt.php">
                                    <img class="img-fluid" src="images/entrenamiento_icon.png" alt="<?php lang('Entrenamiento');?>" title="<?php lang('Entrenamiento');?>">
                                    <b><?php lang('Entrenamiento');?></b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="text-center mt-5">
                <a href="#!" data-toggle="modal" data-target="#aplicaNiveles" style="color: #27beef;"><?php lang('index_010');?></a>
            </h3>
            <!--<hr/>
            <div class="sip">
                <a href="sip.php">
                    <img class="img-fluid" src="images/sip.png" alt="Sistema de ingreso y permananecia" title="Sistema de ingreso y permananecia">
                </a>
            </div>-->
        </div>
    </section>
    <section class="b10_landing">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 pt-5">
                    <h2 class="pb-3">¿<?php lang('index_062');?> <img class="img-fluid" src="images/lexium-lite_blanco.png">?</h2>
                    <h4 class="pb-2"><?php lang('index_063');?></h4>
                    <h4 class="pb-4"><?php lang('index_064');?></h4>
                    <h4 class="pb-4" style="font-weight:500;"><?php lang('index_065');?></h4>
                    <a href="https://lexiumlite.zohocommerce.com/" class="btn btn-primary"><?php lang('index_066');?></a>
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid" src="images/mono_lexium_lite.png" alt="Lexium Lite" title="Lexium Lite">
                </div>
            </div>
        </div>
    </section>
    <section class="b5_landing bg_gray py-5">
        <div class="container">
            <h2 class="mb-3"><?php lang('index_011');?></h2>
            <div class="row text-center">
                <div class="col-md-3">
                    <img class="img-fluid" src="images/incrementa_icon.png" alt="<?php lang('index_068');?>" title="<?php lang('index_068');?>">
                    <p class="my-3"><?php lang('index_012');?></p>
                </div>
                <div class="col-md-3">
                    <img class="img-fluid" src="images/mejora_icon.png" alt="<?php lang('index_069');?>" title="<?php lang('index_069');?>">
                    <p class="my-3"><?php lang('index_013');?></p>
                </div>
                <div class="col-md-3">
                    <img class="img-fluid" src="images/fortalece_icon.png" alt="<?php lang('index_070');?>" title="<?php lang('index_070');?>">
                    <p class="my-3"><?php lang('index_014');?></p>
                </div>
                <div class="col-md-3">
                    <img class="img-fluid" src="images/prosperar_icon.png" alt="<?php lang('index_071');?>" title="<?php lang('index_071');?>">
                    <p class="my-3"><?php lang('index_015');?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="b6_landing bg_blue py-5">
        <div class="container">
            <h4><?php lang('index_016');?></h4>
            <h2 class="mb-5"><?php lang('index_017');?></h2>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme testimonial-slider"  id="testimonial-slider">
                        <div class="item">
                                <div class="testimonial-container">
                                    <div class="d-flex">
                                        <img alt="" class="img-fluid m-r-25" src="images/Celeste_Cortes_Habitat.png">
                                        <div class="center-content">
                                            <h6 class="name"><?php lang('index_018');?></h6>
                                            <h6 class="post font-primary"><?php lang('index_019');?></h6>
                                        </div>
                                    </div>
                                    <div class="testimonial-info">
                                        <p class="m-b-20 para2">
                                            <?php lang('index_020');?>
                                        </p>
                                        <div class="primary-border"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-container">
                                    <div class="d-flex">
                                        <img alt="" class="img-fluid m-r-25" src="images/Georgina_Amezcua_Albatros.png">
                                        <div class="center-content">
                                            <h6 class="name"><?php lang('index_021');?></h6>
                                            <h6 class="post font-primary"><?php lang('index_022');?></h6>
                                        </div>
                                    </div>
                                    <div class="testimonial-info">
                                        <p class="m-b-20 para2">
                                            <?php lang('index_023');?>
                                        </p>
                                        <div class="post primary-border"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-container">
                                    <div class="d-flex">
                                        <img alt="" class="img-fluid m-r-25" src="images/Margarita_Castro_VasoQuiroga.png">
                                        <div class="center-content">
                                            <h6 class="name"><?php lang('index_024');?></h6>
                                            <h6 class="post font-primary"><?php lang('index_025');?></h6>
                                        </div>
                                    </div>
                                    <div class="testimonial-info">
                                        <p class="m-b-20 para2">
                                            <?php lang('index_026');?>
                                        </p>
                                        <div class="primary-border"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-container">
                                    <div class="d-flex">
                                        <img alt="" class="img-fluid m-r-25" src="images/Monica_Espinosa_JuarezLincoln.png">
                                        <div class="center-content">
                                            <h6 class="name"><?php lang('index_027');?></h6>
                                            <h6 class="post font-primary"><?php lang('index_028');?></h6>
                                        </div>
                                    </div>
                                    <div class="testimonial-info">
                                        <p class="m-b-20 para2">
                                           <?php lang('index_029');?>
                                        </p>
                                        <div class="primary-border"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="testimonial-container">
                                    <div class="d-flex">
                                        <img alt="" class="img-fluid m-r-25" src="images/Beatriz_Baez_LaPazPuebla.png">
                                        <div class="center-content">
                                            <h6 class="name"><?php lang('index_030');?></h6>
                                            <h6 class="post font-primary"><?php lang('index_031');?></h6>
                                        </div>
                                    </div>
                                    <div class="testimonial-info">
                                        <p class="m-b-20 para2">
                                            <?php lang('index_032');?>
                                        </p>
                                        <div class="primary-border"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-container">
                                    <div class="d-flex">
                                        <img alt="" class="img-fluid m-r-25" src="images/Jacqueliene_Fournier.png">
                                        <div class="center-content">
                                            <h6 class="name"><?php lang('index_033');?></h6>
                                            <h6 class="post font-primary"><?php lang('index_034');?></h6>
                                        </div>
                                    </div>
                                    <div class="testimonial-info">
                                        <p class="m-b-20 para2">
                                            <?php lang('index_035');?>
                                        </p>
                                        <div class="primary-border"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-container">
                                    <div class="d-flex">
                                        <img alt="" class="img-fluid m-r-25" src="images/Cecilia_Martinez_LiceoLosRosales.png">
                                        <div class="center-content">
                                            <h6 class="name"><?php lang('index_036');?></h6>
                                            <h6 class="post font-primary"><?php lang('index_037');?></h6>
                                        </div>
                                    </div>
                                    <div class="testimonial-info">
                                        <p class="m-b-20 para2">
                                            <?php lang('index_038');?>
                                        </p>
                                        <div class="primary-border"></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="b7_landing pt-5 pb-3">
        <div class="container text-center">
            <h2 class="mb-3"><?php lang('index_039');?></h2>
            <p class="mb-5"><?php lang('index_040');?></p>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img class="img-fluid my-4" src="images/joseVargas.png" alt="José Vargas Barrera" title="José Vargas Barrera">
                            <h5 class="mb-3"><?php lang('index_041');?></h5>
                            <p><a href="https://www.linkedin.com/in/jos%C3%A9-vargas-barrera-b4384757/" target="_blank"><b><?php lang('index_042');?></b></a></p>
                            <p><?php lang('index_043');?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img class="img-fluid my-4" src="images/laura.png" alt="Laura Elizondo" title="Laura Elizondo">
                            <h5 class="mb-3"><?php lang('index_044');?></h5>
                            <p><a href="https://www.linkedin.com/in/laura-elizondo-williams-40b5b4a3/" target="_blank"><b><?php lang('index_045');?></b></a></p>
                            <p><?php lang('index_046');?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <img class="img-fluid mb-4" src="images/adela.png" alt="Adela García" title="Adela García">
                            <h5 class="mb-3"><?php lang('index_047');?></h5>
                            <p><a href="https://www.linkedin.com/in/adela-garc%C3%ADa-41343949/" target="_blank"><b><?php lang('index_048');?></b></a></p>
                            <!--<p>Experta en acompañamiento para implementar con éxito proyectos que potencian el perfil de aprendizaje de las comunidades educativas.</p>-->
                            <p><?php lang('index_049');?></p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <img class="img-fluid mb-4" src="images/eloy.png" alt="Eloy Marroquí" title="Eloy Marroquí">
                            <h5 class="mb-3"><?php lang('index_050');?></h5>
                            <p><a href="https://www.linkedin.com/in/eloy-marroqu%C3%ADn-vazquez-3038515a/" target="_blank"><b><?php lang('index_051');?></b></a></p>
                            <p><?php lang('index_052');?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <img class="img-fluid mb-4" src="images/alma.png" alt="Alma Delia Garza" title="Alma Delia Garza">
                            <h5 class="mb-3"><?php lang('index_053');?></h5>
                            <p><a href="https://www.linkedin.com/in/alma-delia-garza-capetillo-5128172a/" target="_blank"><b><?php lang('index_054');?></b></a></p>
                            <p><?php lang('index_055');?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <img class="img-fluid mb-4" src="images/brenda.png" alt="Brenda Jiménez" title="Brenda Jiménez">
                            <h5 class="mb-3"><?php lang('index_056');?></h5>
                            <p><b><?php lang('index_057');?></b></p>
                            <p><?php lang('index_058');?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="b8_landing bg_gray text-center py-5">
        <h1><?php lang('index_059');?></h1>
        <h4><?php lang('index_060');?></h4>
        <!--<a class="btn btn-primary">Conviertete en Lexium Partner</a>-->
    </section>

<!-- Modal Video -->
<div class="modal fade" id="video" tabindex="-1" role="dialog" aria-labelledby="individualLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="individualLabel"><?php lang('index_061');?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <iframe src="https://player.vimeo.com/video/359605600?title=0&byline=0" width="100%" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
      </div>

    </div>
  </div>
</div>
<!-- Termina Modal Video -->
<!-- Modal Aplica Niveles -->
<div class="modal fade" id="aplicaNiveles" tabindex="-1" role="dialog" aria-labelledby="individualLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!--<h5 class="modal-title" id="individualLabel">Lexium la empresa del aprendizaje</h5>-->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <img class="img-fluid my-4" src="images/lineadetiempo.jpg" />
      </div>

    </div>
  </div>
</div>
<!-- Termina Modal Video -->

<script type="text/javascript">
    /*************************
     testimonial js start
     *************************/
    $(document).ready(function(){
        $('#testimonial-slider').owlCarousel({
            items: 3,
            margin: 65,
            nav: true,
            dots: false,
            navText: ['<img src="images/left.png">', '<img src="images/right.png">'],
            autoplay: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            loop: true,
            responsive: {
                0: {
                    items: 1,
                    margin: 10
                },
                575: {
                    items:2,
                    margin: 10
                },
                991: {
                    items: 2,
                    margin: 30
                },
                1199: {
                    items: 2,
                    margin: 30
                }
            }
        });
    });
    /*************************
     testimonial js end
     *************************/
</script>

    <?php include 'footer.php' ?>
