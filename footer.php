        <style type="text/css">
               /*BOTON GUIA*/

              .guia:lang(en){
                  display: none;
              }

               .guia{
                   position: absolute;
                   right: 8%;
                   top: 16%;
                   background: #fff;
                   border-radius: 20%;
                   color: #f78d20;
                   padding: 2% 5%;
               }
        </style>


        <footer>
            <div class="container">
                <div class="text-center">
                  <img src="images/logo_lexium.png" class="img-fluid">
                  <h1><?php lang('Exploring');?></h1>
                </div>
                <div class="row mt-5">
                  <div class="col-md-6 mb-5">
                    <h3><?php lang('Soluciones');?></h3>
                    <div class="row">
                      <div class="col-lg-6">
                        <a href="<?php echo 'skillmap.php'?>">» <?php lang('Skill Map');?></a></a>
                        <ul>
                          <li style="float: left;">
                            <a href="evaluacion.php"><?php lang('Evaluaciones');?></a>
                            <a target="_blank" class="guia" href="pdf/guia_lexium_exa_admision.pdf" title="descarga la EVALUACIÓN INGRESO/ ADMISIÓN">Guía</a>
                          <li><a href="diagnostico.php"><?php lang('Diagnóstico');?></a></li>
                          <li><a href="herramientas.php"><?php lang('Herramientas');?></a></li>
                        </ul>
                      </div>
                      <div class="col-lg-6">
                        <a href="<?php echo 'skillmt.php'?>">» <?php lang('Skill Map & Training');?></a>
                        <ul>
                          <li><a href="<?php echo 'skillmap.php'?>"><?php lang('Skill Map');?></a>
                            <a target="_blank" class="guia" href="pdf/guia_lexium_skill_map.pdf" title="descarga la Guia Lexium Skill Map">Guía</a></li>
                          <li><a href="skillmt.php"><?php lang('Entrenamiento');?></a></li>
                        </ul>
                      </div>
                    </div>
                    <a href="<?php echo 'sip.php'?>">» <?php lang('Sistema de ingreso y permanencia');?></a>
                    <ul>
                      <li><a href="<?php echo 'sip.php'?>"><?php lang('Admisión');?></a></li>
                      <li><a href="<?php echo 'sip.php'?>"><?php lang('Guía vocacional');?></a></li>
                      <li><a href="<?php echo 'sip.php'?>"><?php lang('Pronóstico de permanencia');?></a></li>
                      <li><a href="<?php echo 'sip.php'?>"><?php lang('Riesgo de abandono');?></a></li>
                    </ul>
                  </div>
                  <div class="col-md-3 mb-5">
                      <h3><?php lang('Casos de éxito');?></h3>
                      <a href="<?php echo 'confianza.php'?>">» <?php lang('Clientes');?></a>
                      <a href="<?php echo 'nuestros_clientes_opinan.php'?>">» <?php lang('Testimonios');?></a>
                      <a href="<?php echo 'valores.php'?>">» <?php lang('Apoyo Social');?></a>
                  </div>
                  <div class="col-md-3 mb-5">
                      <h3><?php lang('Más');?></h3>
                      <a href="#">» <?php lang('Nosotros');?></a>
                      <!--<a href="#">» Lexium Partner</a>-->
                      <a href="http://blog.lexiumonline.com/">» <?php lang('Blog');?></a>
                      <a href="<?php echo 'contacto.php'?>">» <?php lang('Contacto');?></a>
                  </div>
                </div>
            </div>
            <div class="privacy_advise text-center">
              <?php lang('Footer_text_01');?>
              <br/><a href="politicas.php"><?php lang('Footer_text_02');?> </a>
            </div>
        </footer>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster
        <script src="./js/jquery.js"></script>-->

        <!--<script>window.jQuery || document.write('<script src="./js/vendor/jquery-slim.min.js"><\/script>')</script>-->
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/owl.carousel.js"></script>
        <!--<script src="./js/vendor/holder.min.js"></script>-->
        <script>
        $(document).ready(function() {
          var owl = $('.owl-carousel');
          owl.owlCarousel({
            margin: 20,
            nav: true,
            loop: true,
            responsive: {
              0: {
                items: 3
              },
              600: {
                items: 5
              },
              1000: {
                items: 7
              }
            }
          })
        })
        </script>
    </body>
</html>
