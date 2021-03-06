<?php
  $archivo_previo = strtr($archivo_previo, "/", "\\");
  $ap_arr = explode("\\", $archivo_previo);
  $archivo_previo = $ap_arr[count($ap_arr)-1];

  $titulos = array(
    'sip.php' => 'Sistema de Ingreso y Permanencia | ',
    'index.php' => ' ',
    'k9.php' => 'K9 | ',
    'preparatoria.php' => 'Preparatoria y Universidad | ',
    'consultor.php' => 'Consultor / Orientador / Psicopedagogo | ',
    'nosotros.php' => 'Nosotros | ',
    'clientes.php' => ' Clientes | ',
    'testimoniales.php' => 'Testimonios | ',
    'social.php' => 'Apoyo Social | ',
    'contacto.php' => 'Contacto | ',
    'skillmap.php' => 'Skill Map | ',
    'evaluacion.php' => 'Evaluaciones | ',
    'diagnostico.php' => 'Diagnóstico | ',
    'herramientas.php' => 'Herramientas | ',
    'skillmaptrainingk9.php' => 'Skill Map & Training | ',
    'skillmaptrainingpu.php' => 'Skill Map & Training | ',
    'skillmaptrainingcop.php' => 'Skill Map & Training | ',
    'captacion.php' => 'Captaciòn | ',
    'admision.php' => 'Admisión | ',
    'op.php' => 'Orientación Profesional |',
    'gracias.php' => '¡Gracias! |',
    'gracias2.php' => '¡Gracias! |',
  );

  //   session_start();
  // if(in_array($archivo_previo, array('k9.php', 'preparatoria.php', 'consultor.php')))
  // {
  //   $_SESSION['link_inicio'] = $archivo_previo;
  // }
  // else
  // {
  //   if(!isset($_SESSION['link_inicio']))
  //   {
  //     $_SESSION['link_inicio'] = 'preparatoria.php';
  //   }
  // }
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127267171-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127267171-1');
</script>

<!-- Global site tag (gtag.js) - Google Ads: 784291087 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-784291087"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-784291087');
</script>

<?php if($archivo_previo == 'contacto.php')
{
?>
<!-- Hotjar Tracking Code for https://www.lexiumonline.com/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1334117,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

<?php
}?>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Impulsa el potencial de tu institución <span>Re-imaginando</span> el aprendizaje.">
    <meta name="author" content="">
    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="LEXIUM">
    <meta itemprop="description" content="Impulsa el potencial de tu institución <span>Re-imaginando</span> el aprendizaje.">
    <meta itemprop="image" content="//www.lexiumonline.com/images/avatar_header.png">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="//www.lexiumonline.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="LEXIUM">
    <meta property="og:description" content="Impulsa el potencial de tu institución <span>Re-imaginando</span> el aprendizaje.">
    <meta property="og:image" content="//www.lexiumonline.com/images/avatar_header.png">
    <link rel="icon" href="resources/favicon.ico">
    <title><?php echo $titulos[$archivo_previo];?>LEXIUM</title>

     <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
     <!-- FONTS-->
   <!--  <link href="//db.onlinewebfonts.com/c/0dd7edde115ef38e7def4b16e93b5884?family=HarmoniaSansW01-Regular" rel="stylesheet" type="text/css"/>
    <link href="//db.onlinewebfonts.com/c/99f44be299d4608af6fbe99aa38ce446?family=HarmoniaSansW01-Bold" rel="stylesheet" type="text/css"/> -->

    <script src="//code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="js/conf.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit" async defer></script>
	
</head>