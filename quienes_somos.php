<?php include('header.php'); ?>

<script language="javascript" type="text/javascript">
    $(document).ready(function() {

        var ti2 ="<?php lang('WHO_002')?>";
        var ti3 ="<?php lang('WHO_003')?>";
        var ti4 ="<?php lang('WHO_004')?>";
        var ti5 ="<?php lang('WHO_005')?>";
        var ti6 ="<?php lang('WHO_006')?>";


        videoV = new Array('https://player.vimeo.com/video/333801959?title=0&byline=0', 'https://player.vimeo.com/video/333174665?title=0&byline=0','https://player.vimeo.com/video/337820786?title=0&byline=0', 'https://player.vimeo.com/video/332560547?title=0&byline=0', 'https://player.vimeo.com/video/338765127?title=0&byline=0');

        title = new Array(ti2,ti3,ti4,ti5,ti6);

        var points = [0, 1, 2, 3, 4];
        points.sort(function(a, b){return 0.5 - Math.random()});

        for (var i = 0; i <= 4; i++){

            var videoUno = videoV[points[i]];
            var videoUnotitle = title[points[i]];
            document.getElementById("mostrarVideos").innerHTML += '<div class="col-sm-6"><iframe src="'+ videoUno +'" width="100%" height="215" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe><h5 class="my-4 text-center">'+ videoUnotitle +'</h5></div>';

        };

    });

</script>

<section class="sub-header d-flex align-items-center justify-content-center">
    <h1 class="mt-5 pt-5"><?php lang('PHI_001');?></h1>
</section>

<div class="container py-5">
    <!--<h2>Estos videos te darán una idea clara y contundente de por qué somos <br/>la empresa líder en aprendizaje.</h2>--><br/>
    <div class="row" id="mostrarVideos"></div>
</div>

<?php include('footer.php'); ?>
