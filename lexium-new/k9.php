<?php  
   require './header.php';
   require './menu.php';
?> 

<style type="text/css">
  /* Propiedades de las olas que van detras del slider */
.principal-slider{ position:relative; width:100%; overflow:hidden;  z-index: 1;}
.scene-slider{ height: 85%!important; }
.principal-slider .wave{ position:absolute; bottom:0; left:0; width:100%; height:100px; background:url('./resources/wave.png'); background-size:1000px 100px;} 
.principal-slider .wave.wave1{ animation:animate 30s linear infinite; z-index:999; opacity:1; animation-delay:0s; top: 22%!important;}
.principal-slider .wave.wave2{ animation:animate2 15s linear infinite; z-index:998; opacity:0.5; animation-delay:-5s;top: 18%!important;}
.principal-slider .wave.wave3{ animation:animate 30s linear infinite; z-index:997; opacity:0.2; animation-delay:-2s; top: 13%!important;}
.principal-slider .wave.wave4{ animation:animate2 5s linear infinite;	z-index:996; opacity:0.7;	animation-delay:-5s; top: 17%!important;}
.principal-slider .bottomwave{ background: #0099ff; position:absolute; bottom:0; left:0; width:100%; height: 560%;
    top: 100%!important;}
@keyframes animate{
	0%{
		background-position-x: 0;
	}
	100%{
		background-position-x: 1000px;
	}
}
@keyframes animate2{
	0%{
		background-position-x: 0;
	}
	100%{
		background-position-x: -1000px;
	}
}


@media (max-width: 768px) {
   .bottomwave{ height: 290%!important;}
}
  /* Fin propiedades de las olas que van detras del slider */
</style>

<section class="principal-slider">
    <div id="scene-slider">
            <div class="wave wave1"></div>
            <div class="wave wave2"></div>
            <div class="wave wave3"></div>
            <div class="wave wave4"></div>
            <div class="bottomwave"></div>
            <div class="layer" id="img3" style="z-index: 3000; " data-depth="2.1"><img src="./resources/images/parallax-mouse/bg-wave-03.png"></div>
            <div class="layer" id="img1" style="z-index: 3000; " data-depth="0.90"><img src="./resources/images/parallax-mouse/bg-wave-02.png"></div>
            <div class="layer" id="img2" style="z-index: 3000; " data-depth="1.30"><img src="./resources/images/parallax-mouse/bg-wave-01.png"></div>
            <div class="layer" id="img4" style="z-index: 3000; " data-depth=".20"><img src="./resources/images/parallax-mouse/bg-wave-04.png"></div>
            <div class="layer" id="img5" style="z-index: 3000; " data-depth="1.80"><img src="./resources/images/parallax-mouse/bg-wave-05.png"></div>
            <div class="layer" id="img6" style="z-index: 3000; " data-depth="1.70"><img src="./resources/images/parallax-mouse/bg-wave-06.png"></div>
            <div class="layer" id="img7" style="z-index: 3000; " data-depth="1.50"><img src="./resources/images/parallax-mouse/bg-wave-07.png"></div>
    </div>
    <div class="h-50 w-100 text-center solicitar-demo" style="z-index: 4000">
                <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                 <div class="carousel-inner">
                   <div class="carousel-item active">
                     <div class="mask flex-center">
                       <div class="container">
                         <div class="row align-items-center">
                           <div class="col-md-5 col-8 order-md-1 order-2">
                             <h5 style="color: #faaf11; font-family: 'HarmoniaSansW01-Bold'; font-size: 2.5em; margin-bottom: 0px!important;">K-9</h5>
                             <h4>Impulsa el potencial de tu institución re-imaginando el aprendiaje.</h4>
                             <p>Bienvenido a Lexium la plataforma de tecnología de aprendizaje mas innovadora del mercado.</p>
                             <a href="#">Solicitar Demo</a> </div>
                           <div class="col-md-7 col-4 order-md-2 order-1"><img src="./resources/k9kids.png" class="mx-auto" alt="slide"></div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
                </div>
                <!--slide end-->            
    </div>
</section>
    <script type="text/javascript">
         var scene = document.getElementById('scene-slider');
         var parallax = new Parallax(scene);
         parallaxInstance.friction(0.2, 0.2);
    </script>

<?php
    require './data.php';
    require './solucionesk9.php';
    require './whyk9.php';
    require './testimonio.php';
    require './directivos.php';
    require './lite.php';
    require './footer.php';

?>

