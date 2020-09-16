<?php include('header.php'); ?>
<style>
.navbar-expand-lg .navbar-collapse,
.navbar-dark .navbar-toggler,
footer .col-md-10,
footer .col-md-2 img{
  display: none!important;
}
.navbar-dark .navbar-brand{
  margin: auto;
}
footer .col-md-2{
    max-width: 100%;
    flex: 100%;
}

</style>
<section class="sub-header d-flex align-items-center justify-content-center">
    <h1>Renta de oficinas</h1>
</section>

<p>&nbsp;</p>

<div class="row" id="aviso_ie" style="display:none">
	<div class="col-md-6" style="margin:auto;">

		<div class="alert alert-primary" role="alert">
		  <h4 class="alert-heading">Importante!</h4>
		  <hr>
		  <p class="mb-0">Para ver el recorrido virtual se recomienda utilizar <b>Firefox, Chrome o Safari.</b></p>
		</div>

	</div>
</div>

<div class="container py-5">
  <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/341865004?title=0&byline=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>

	<p>&nbsp;</p>

	<div id="recorrido">
		<div class="alert alert-dask" role="alert">
		  <h4 class="alert-heading">Instrucciones.</h4>
		  <hr>
		  <p class="mb-0">Haga clic en los íconos para ver las imágenes interiores.</p>
		</div>
		<iframe width="100%" height="480px" src="https://poly.google.com/view/amzwXIeozNa/embed?chrome=min" frameborder="0" style="border:none;" allowvr="yes" allow="vr; xr; accelerometer; magnetometer; gyroscope; autoplay;" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" onmousewheel="" ></iframe>
	</div>

</div>

<script type="text/javascript">

function ieVersion(uaString) {
  uaString = uaString || navigator.userAgent;
  var match = /\b(MSIE |Trident.*?rv:|Edge\/)(\d+)/.exec(uaString);
  if (match) return parseInt(match[2])
}

if(ieVersion() > 0)
{
	$('#aviso_ie').show();
	$('#recorrido').hide();
}

</script>
<?php include('footer.php'); ?>
