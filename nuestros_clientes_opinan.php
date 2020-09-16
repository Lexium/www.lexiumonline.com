<?php include('header.php'); ?>
<script language="javascript" type="text/javascript">
    $(document).ready(function() {

        videoV = new Array('https://player.vimeo.com/video/337564752?title=0&byline=0', 'https://player.vimeo.com/video/337564765?title=0&byline=0', 'https://player.vimeo.com/video/339176472?title=0&byline=0', 'https://player.vimeo.com/video/340304718?title=0&byline=0', 'https://player.vimeo.com/video/340262886?title=0&byline=0', 'https://player.vimeo.com/video/340236661?title=0&byline=0', 'https://player.vimeo.com/video/340490513?title=0&byline=0', 'https://player.vimeo.com/video/340473378?title=0&byline=0', 'https://player.vimeo.com/video/342078321?title=0&byline=0', 'https://player.vimeo.com/video/342330223?title=0&byline=0');

        var p2 ="<?php lang('TEST_002') ?>";
        var p3 ="<?php lang('TEST_003') ?>";
        var p4 ="<?php lang('TEST_004') ?>";
        var p5 ="<?php lang('TEST_005') ?>";
        var p6 ="<?php lang('TEST_006') ?>";
        var p7 ="<?php lang('TEST_007') ?>";
        var p8 ="<?php lang('TEST_008') ?>";
        var p9 ="<?php lang('TEST_009') ?>";
        var p10 ="<?php lang('TEST_010') ?>";

        nameP = new Array('Celeste Cortés', 'Georgina Amezcua', 'Margarita Castro', 'Mónica Espinosa', 'Elizabeth Navarro', 'Litzabel Legaria Lajud', 'Beatriz Báez López', 'Alejandra del Carmen Dardón', 'Cecilia Martínez', 'Jacqueline Fournier Hamz');
        position = new Array(p2,p3,p3,p4,p5,p6,p7,p8,p9,p10);
        title = new Array('Centro Escolar Hábitat S.C.', 'Colegio Albatros', 'Instituto Vasco de Quiroga', 'Instituto Juarez Lincoln', 'Instituto Juarez Lincoln', 'Instituto Juarez Lincoln', 'Instituto La Paz de Puebla', 'Instituto Juárez Lincoln','Liceo Los Rosales', 'Liceo de Monterrey');

        var points = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        points.sort(function(a, b){return 0.5 - Math.random()});

        for (var i = 0; i <= 9; i++){

            var videoUno = videoV[points[i]];
            var videoUnonameP = nameP[points[i]];
            var videoUnoposition = position[points[i]];
            var videoUnotitle = title[points[i]];
            document.getElementById("mostrarVideos").innerHTML += '<div class="col-md-4 col-sm-6"><iframe src="'+ videoUno +'" width="100%" height="315" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe><h5 class="my-4 text-center">'+ videoUnonameP +'</h5><h6 class="my-4 text-center">'+ videoUnoposition +' del <span>'+ videoUnotitle +'</span></h6></div>';

        };

    });

</script>


<section class="text-center pt-5 mt-5">
    <h1><?php lang('TEST_001');?></h1>
</section>

<div class="container py-5">
    <!--<h2>Estos videos te darán una idea clara y contundente de por qué somos <br/>la empresa líder en aprendizaje.</h2><br/>-->
    <br/>
    <div class="row us_customers" id="mostrarVideos"></div>

</div>

<?php include('footer.php'); ?>
