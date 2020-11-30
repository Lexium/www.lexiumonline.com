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
		 	  <div class="col-md-2 col-4">
		 	  	   <h5>K-9</h5>
		 	  	   <ul>
                       <li><a class="strongetxt"  href="skillmap.php">Skill Map</a></li>
                       <div class="line" style="border-bottom: 1px solid #fff;"></div>
                       <li><a  href="evaluacion.php">Evaluación</a></li>
                       <li><a  href="diagnostico.php">Diagnóstico</a></li>
                       <li><a  href="herramientas.php">Herramientas</a></li>
                       <li><a class="strongetxt"  href="skillmaptrainingk9.php">Skill MT</a></li>
                       <li><a  href="skillmaptrainingk9.php">Entrenamiento</a></li>
                   </ul>
		 	  </div> 
        <div class="col-md-3 col-4">
             <h5>Preparatoria y Universidades</h5>
             <ul>
                      <!--  <li><a class="strongetxt" href="skillmap.php">Skill Map</a></li>
                       <li><a class="" href="#">Evaluación</a></li>
                       <li><a class="" href="#">Diagnóstico</a></li>
                       <li><a class="" href="#">Herramientas</a></li> -->
                       <li><a class="strongetxt" href="skillmaptrainingpu.php">Skill MT</a></li>
                       <li><a class="" href="skillmaptrainingpu.php#trainig">Entrenamiento</a></li>
                       <li><a class="strongetxt" href="captacion.php">Captación</a></li>
                       <li><a class="" href="#">Test rápido para</br> captar alumnos</a></li>
                       <li><a class="strongetxt" href="sip.php">Sistema de ingreso </br>y permanencia</a></li>
                       <li><a class="" href="sip.php#admision">Admisión</a></li>
                       <li><a class="" href="sip.php#guia">Guía vocacional</a></li>
                       <li><a class="" href="sip.php#pronostico">Pronóstico de</br>permanencia</a></li>
                       <li><a class="" href="sip.php#riesgo">Riesgo de abandono</a></li>
                   </ul>
        </div> 
        <div class="col-md-3 col-4">
             <h5>Consultor / Orientador / Psciopedagogo</h5>
             <ul>
                       <li><a class="strongetxt"  href="skillmap.php">Skill Map</a></li>
                       <li><a  href="evaluacion.php">Evaluación</a></li>
                       <li><a  href="diagnostico.php">Diagnóstico</a></li>
                       <li><a  href="herramientas.php">Herramientas</a></li>
                       <li><a class="strongetxt"  href="skillmaptrainingcop.php">Skill MT</a></li>
                       <li><a  href="skillmaptrainingcop.php#trainig">Entrenamiento</a></li>
                   </ul>
        </div> 
		 	  
		 	  <div class="div-bottom" style=""></div>
		 	  <div class="col-md-2 col-6">
		 	  	   <h5>Casos de éxito</h5>
		 	  	   <ul>
                       <li><a  href="clientes.php">Clientes</a></li>
                       <li><a  href="testimoniales.php">Testimonio</a></li>
                       <li><a  href="social.php">Apoyo social</a></li>
                   </ul>
		 	  </div> 
		 	  <div class="col-md-2 col-6">
		 	  	   <h5>Más</h5>
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


