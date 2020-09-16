<?php
include('config.php');

$has_error= array();

if($_POST){

	require_once 'libraries/Madmimi.php';

	function send_madmimi($params_email){
		global $config;

		$params_email['subject']="Solicita demo";

		$options = array(
            'promotion_name' => 'Notificaciones',
            'recipients'     => $config['email_admin'],
            'subject'        => $params_email['subject'],
            'from'           => $params_email['name'] .' <'. $params_email['email'] .'>',
        );

		if(ENVIRONMENT == "DEVELOPMENT"){
			$options['recipients']= $config['email_testing'];
		}

        if(isset($params_email['bcc']) and $params_email['bcc']!=""){
            $options['bcc'] = $params_email['bcc'];
        }

        /*if (is_array($params_email['nivel'])) {
        	$params_email['nivel'] = implode(",", $params_email['nivel']);
        }*/

        $body = "";
        if ($params_email['Plataforma'] !== '')
        {
        	$body.= "<p>Plataforma: ".$params_email['Plataforma']."</p>";
        }

		//$body.= "<p>Institución: ".$params_email['company']."</p>";
		$body.= "<p>Contacto: ".$params_email['name']."</p>";
		$body.= "<p>E-mail: ".$params_email['email']."</p>";
		$body.= "<p>Teléfono: ".$params_email['phone']."</p>";
		//$body.= "<p>Nivel educativo: ".$params_email['nivel']."</p>";
		//$body.= "<p>Soluciones: ".implode(",",$params_email['solutions'])."</p>";

		$body.= "<p>&nbsp;</p>";

        $body.= $params_email['message'];
        $mensaje = '<html><head><title>Notificaciones</title></head><body>[[tracking_beacon]] '. $body .'</body></html>';

		$madmimi= new MadMimi();
		$transaction_id = $madmimi->SendHTML($options, $mensaje);

		if(isset($transaction_id)){
			return 1;
		}

        return 0;
	}
//	"<pre>".print_r($_POST)."</pre>";die();


	if(trim($_POST['name'])==""){
		$has_error['name']= "Nombre es requerido";
	}
	//if(trim($_POST['lastname'])==""){
		//$has_error['lastname']= "Apellidos son requerido";
	//}
	/*if(trim($_POST['company'])==""){
		$has_error['company']= "Institución es requerida";
	}*/
	if(trim($_POST['email'])==""){

		$has_error['email']= "Email es requerido";
	}
	/*if(strstr($_POST['email'],'@gmail')){
		$has_error['email']= "Escriba correo de la empresa";
	}
	if(strstr($_POST['email'], '@hotmail')){
		$has_error['email']= "Escriba correo de la empresa";
	}
	if(strstr($_POST['email'],'@yahoo')){
		$has_error['email']= "Escriba correo de la empresa";
	}
	if(trim($_POST['phone'])==""){
		$has_error['phone']= "Teléfono es requerido";
	}

	if(trim($_POST['employees'])==""){
		$has_error['employees']= "Nivel educativo es requerido";
	}*/
	/*if(!isset($_POST['solutions']) or isset($_POST['solutions']) and count($_POST['solutions'])<=0){
		$has_error['solutions']= "Seleccione al menos una solución";
	}*/
	if(trim($_POST['message'])==""){
		$has_error['message']= "Comentario es requerido";
	}
	if(trim($_POST['g-recaptcha-response'])==""){
		$has_error['g-recaptcha-response']= "Por favor, confirma que no eres un robot";
	}

	$ip = $_SERVER['REMOTE_ADDR'];
	$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $config['recaptcha_secretKey'] . "&response=" . $_POST['g-recaptcha-response'] . "&remoteip=" . $ip);
	$responseKeys = json_decode($response, true);
	if (intval($responseKeys["success"]) !== 1) {
		$has_error['g-recaptcha-response']= "Por favor, confirma que no eres un robot";
	}

	if(count($has_error)<=0){
		$success= send_madmimi($_POST);
	}
}

