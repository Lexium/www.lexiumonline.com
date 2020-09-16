<?php include_once('simple_html_dom.php');?>


<script language="javascript" type="text/javascript">
    $(document).ready(function(){

        var ivar1 ='<?php lang('footerINT_001');?>';
        var ivar2 ='<?php lang('footerINT_002');?>';
        var ivar3 ='<?php lang('footerINT_003');?>';
        var ivar4 ='<?php lang('footerINT_004');?>';
        var ivar5 ='<?php lang('footerINT_005');?>';
        var ivar6 ='<?php lang('footerINT_006');?>';

        iconoArray = new Array('evaluacion','diagnostico','herramientas','entrenamiento','skillmap','skillmt');
        tituloArray = new Array(ivar1,ivar2,ivar3,ivar4,ivar5,ivar6);
        ligaArray = new Array('evaluacion','diagnostico','herramientas','skillmt','skillmap','skillmt');

        var points = [0, 1, 2, 3, 4, 5];


        var paginaActual = '<?php echo $archivo_previo;?>';

        delete iconoArray[paginaActual];
        delete tituloArray[paginaActual];
        delete ligaArray[paginaActual];
        delete points[paginaActual];

        points.sort(function(a, b){return 0.5 - Math.random()});

        for (var i = 0; i <= 3; i++){

                var icono = iconoArray[points[i]];
                var titulo = tituloArray[points[i]];
                var liga = ligaArray[points[i]];

                document.getElementById("mostrarLigas").innerHTML += '<div class="col-sm-3"><img class="img-fluid" src="images/'+icono+'_gris_icon.png" alt="'+titulo+'" title="'+titulo+'"><a href="'+liga+'.php">'+titulo+'</a></div>';

        };
    });
</script>




<section class="footer_search py-5">
    <div class="container">
        <h4><?php lang('footerINT_007');?></h4>
        <form class="pt-5 pb-3 form" method="post" action="contacto.php">
            <div class="form-row align-items-center">
                <div class="col-auto">
                    <input type="text" name="name" class="form-control mb-4" id="inlineFormInput" placeholder="<?php lang('footerINT_012');?> *" required />
                </div>
                <div class="col-auto">
                    <div class="input-group">
                        <input type="email" name="email" class="form-control mb-4" id="inlineFormInputGroup" placeholder="<?php lang('footerINT_013');?> *" required />
                    </div>
                </div>
                <div class="col-auto">
                    <input type="hidden" name="completo" value="0">
                    <button type="submit" class="btn btn-warning mb-4" style="margin-top:0"><?php lang('footerINT_008');?></button>
                </div>
            </div>
        </form>
    </div>
</section>
<section class="footer_navigation bg_gray py-5 text-center">
    <div class="container">
        <h4 class="mb-5"><?php lang('footerINT_009');?></h4>
        <div class="row" id="mostrarLigas"></div>
        <!--<div class="row">
            <div class="col-sm-3">
                <img class="img-fluid" src="images/diagnostico_gris_icon.png" alt="diagnostico_icon" title="diagnostico_icon">
                 <a href="diagnostico.php">Diagnóstico</a>
            </div>
            <div class="col-sm-3">
                <img class="img-fluid" src="images/herramientas_gris_icon.png" alt="herramientas_icon" title="herramientas_icon">
                <a href="herramientas.php">Herramientas</a>
            </div>
            <div class="col-sm-3">
                <img class="img-fluid" src="images/skillmt_gris_icon.png" alt="skillmt_icon" title="skillmt_icon">
                <a href="skillmt.php">Skill Map & Training</a>
            </div>
            <div class="col-sm-3">
                <img class="img-fluid" src="images/sip_gris_icon.png" alt="sip_icon" title="sip_icon">
                <a href="sip.php">Sistema de Ingreso y Permanencia</a>
            </div>
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
                <img class="img-fluid" src="images/mono_lexium_lite.png">
            </div>
        </div>
    </div>
</section>
<section class="b2_landing py-5">
    <div class="container">
        <h2 class="mb-5"><?php lang('footerINT_010');?></h2>
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
</section>
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5"><?php lang('footerINT_011');?></h2>

            <?php

                $html = file_get_html('http://blog.lexiumonline.com/');
                $resp = $html->find('div.elementor-element-d9a2a17');

                echo str_replace("http://", "//", $resp[0]->innertext);

            ?>

    </div>
</section>
