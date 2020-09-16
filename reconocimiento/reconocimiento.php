<?php
ob_start();
?>
<link href="http://db.onlinewebfonts.com/c/0dd7edde115ef38e7def4b16e93b5884?family=HarmoniaSansW01-Regular" rel="stylesheet" type="text/css"/> 
<link href="http://db.onlinewebfonts.com/c/99f44be299d4608af6fbe99aa38ce446?family=HarmoniaSansW01-Bold" rel="stylesheet" type="text/css"/> 
<style>
@import url(http://db.onlinewebfonts.com/c/0dd7edde115ef38e7def4b16e93b5884?family=HarmoniaSansW01-Regular);
@import url(http://db.onlinewebfonts.com/c/99f44be299d4608af6fbe99aa38ce446?family=HarmoniaSansW01-Bold);

@font-face {font-family: "HarmoniaSansW01-Regular"; src: url("http://db.onlinewebfonts.com/t/0dd7edde115ef38e7def4b16e93b5884.eot"); src: url("//db.onlinewebfonts.com/t/0dd7edde115ef38e7def4b16e93b5884.eot?#iefix") format("embedded-opentype"), url("//db.onlinewebfonts.com/t/0dd7edde115ef38e7def4b16e93b5884.woff2") format("woff2"), url("//db.onlinewebfonts.com/t/0dd7edde115ef38e7def4b16e93b5884.woff") format("woff"), url("//db.onlinewebfonts.com/t/0dd7edde115ef38e7def4b16e93b5884.ttf") format("truetype"), url("//db.onlinewebfonts.com/t/0dd7edde115ef38e7def4b16e93b5884.svg#HarmoniaSansW01-Regular") format("svg"); }  

 @font-face {font-family: "HarmoniaSansW01-Bold"; src: url("http://db.onlinewebfonts.com/t/99f44be299d4608af6fbe99aa38ce446.eot"); src: url("//db.onlinewebfonts.com/t/99f44be299d4608af6fbe99aa38ce446.eot?#iefix") format("embedded-opentype"), url("//db.onlinewebfonts.com/t/99f44be299d4608af6fbe99aa38ce446.woff2") format("woff2"), url("//db.onlinewebfonts.com/t/99f44be299d4608af6fbe99aa38ce446.woff") format("woff"), url("//db.onlinewebfonts.com/t/99f44be299d4608af6fbe99aa38ce446.ttf") format("truetype"), url("//db.onlinewebfonts.com/t/99f44be299d4608af6fbe99aa38ce446.svg#HarmoniaSansW01-Bold") format("svg"); } 
</style>

<?php
if(isset($_GET['uuid']))
{
	$archivo = "datos/". $_GET['uuid'] . ".txt";
	if (file_exists($archivo))
	{
		$valores = parse_ini_file($archivo);
		extract($valores);
		include('formatos/'. $formato . '.php');
	}
	$nombre_archivo = preg_replace("/[^A-Za-z0-9]/", '', ucwords($nombre)) . '.pdf';

}
else
{
	$formato 	= $_GET['formato'];

	foreach ($_GET['nombre'] as $key => $value)
	{
		$nombre 	 = $_GET['nombre'][$key];
		$institucion = $_GET['institucion'];

		include('formatos/'. $formato . '.php');
		if($key > 1 && ($key+1) < count($_GET['nombre']))
		{
			//echo '<p style="page-break-after: always">';
		}
	}
	$nombre_archivo = preg_replace("/[^A-Za-z0-9]/", '', ucwords($institucion)) . '.pdf';
}

$salida = ob_get_contents();
ob_end_clean();

if(isset($_GET['pdf']) && $_GET['pdf'])
{
	$apikey = "d3e7ffbe-fc66-42fd-8157-8ac2a87d22d8";
	$payload = array(
		"html"		=> $salida,
		"inlinePdf"	=> true,
		"fileName"	=> $nombre_archivo,
		"options"	=> array(
	            //"landscape"		=>	true,
	            "paperWidth"	=>	11,
	            "paperHeight"	=>	8.6,

	            "marginLeft"	=>	0,
	            "marginRight"	=>	0,
	            "marginTop"		=>	0,
	            "marginBottom"	=>	0,
	            "delay"			=>	1000,
	        ),
	            "scale"			=>	1,
		);
		$res = raw_to_pdf($apikey, $payload);
		header('Location: ' . $res->pdf);
}
else
{
	echo $salida;
}





//curl -X POST "https://v2018.api2pdf.com/chrome/html" -H  "accept: application/json" -H  "Authorization: ddd848cb-58e6-4b52-85fe-61b054ca091e" -H  "Content-Type: application/json" -d "{\"html\":\"<p>Hello World</p>\",\"inlinePdf\":true,\"fileName\":\"test.pdf\",\"options\":{\"landscape\":\"true\",\"printBackground\":false}}"





function raw_to_pdf($apikey, $payload) {
	$endpoint = "https://v2018.api2pdf.com/chrome/html";
	//Initiate cURL.
	$ch = curl_init($endpoint);

	//Encode the array into JSON.
	$jsonDataEncoded =  json_encode($payload);

	//Tell cURL that we want to send a POST request.
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

	//Attach our encoded JSON string to the POST fields.
	curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

	//Set the content type to application/json
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: '.$apikey));

	//Execute the request
	$json_result = curl_exec($ch);
	if ($json_result === false) {
		$info = curl_getinfo($ch);
		curl_close($ch);
		die('error occured during curl exec. Additional info: ' . var_export($info));
	}
	curl_close($ch);
	$result = json_decode($json_result);
	return $result;
}
?>