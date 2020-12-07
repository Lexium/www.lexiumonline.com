<footer>
	<div class="container">
		 <div class="row formulario">
		 	  <div class="col-md-6">
		 	  	  <h1>Descubre lo que Lexium puede hacer por ti</h1>
		 	  </div>
		 	  <div class="col-md-6">
		 	  	   <form class="pt-5 pb-3 form" method="post" action="contacto.php">
                        <div class="form-row align-items-center">
                            <div class="col-auto" style="width: 60%;">
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control mb-4" id="inlineFormInputGroup" placeholder="Email *" required />
                                </div>
                            </div>
                            <div class="col-auto">
                                <input type="hidden" name="completo" value="0">
                                <button type="submit" class="btn btn-success mb-4" style="margin-top:0">Solicitar Demo</button>
                            </div>
                        </div>
                    </form>
		 	  </div>
		 </div>

     <div class="row menuses">
          <div class="col-md-8">
               <h3>Soluciones</h3>
               <div class="row">
                    <div class="col-md-2">
                         <ul>
                             <li><a class="strongetxt" href="skillmap.php">Skill Map</a></li>
                             <li><a  href="evaluacion.php">Evaluación</a></li>
                             <li><a  href="diagnostico.php">Diagnóstico</a></li>
                             <li><a  href="herramientas.php">Herramientas</a></li>
                         </ul>
                    </div>
                    <div class="col-md-4">
                         <ul>
                            <li><a class="strongetxt"  href="">Skill Training</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#DP" title="Ver video">Entrenamiento Skill T</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#DP" title="Ver video">Offline</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#DP" title="Ver video">DC</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#DP" title="Ver video">PPC</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#DP" title="Ver video">OP</a></li>
                         </ul>
                    </div>
                    <div class="col-md-6">
                         <ul>
                             <li><a class="strongetxt"  href="sip.php">Captación/ Ingreso / Permanencia</a></li>
                             <li><a href="">Test de captación</a></li>
                             <li><a href="">Admisión</a></li>
                             <li><a href="">Sistema de ingreso y permanencia</a></li>
                         </ul>
                    </div>
               </div>
          </div>
          <div class="col-md-2">
               <h3>Niveles</h3>
               <ul>
                  <li><a  href="k9.php.php">K9</a></li>
                  <li><a  href="preparatoria.php">Preparatoria / Universidad</a></li>
                  <li><a  href="consultor.php">Consultor / orientador / psicopedagogo</a></li>
               </ul>
          </div>
          <div class="col-md-2">
               <h3>Más</h3>
               <ul>
                  <li><a  href="nosotros.php">Nosotros</a></li>
                  <li><a  href="http://blog.lexiumonline.com/">Blog</a></li>
                  <li><a  href="contacto.php">Contacto</a></li>
               </ul>
          </div>
     </div>

	   <div class="row privacidad">
          <div class="col-md-12">
                <div class="privacy_advise text-center">
                    Copyright © <?php 
                    $Year = date("Y");
                    echo "$Year";
                    echo "\n";
                    ?> Lexium All Rights Reserved.
                   <br/><a href="politicas.php">Aviso de Privacidad</a>
                </div>
          </div>
     </div>
	</div>

</footer>
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

