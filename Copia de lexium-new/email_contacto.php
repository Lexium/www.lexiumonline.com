<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('config.php');

$has_error= array();

if($_POST && $_POST['completo'] == 1 && $_POST['validacion'] == date("d")){

	require_once 'libraries/Madmimi.php';

	function send_madmimi($params_email){
		global $config;

		$params_email['subject']="Contacto";

		$options = array(
            'promotion_name' => 'Notificaciones',
            'recipients'     => $config['email_admin'],
            'subject'        => $params_email['subject'],
            'from'           => $params_email['name'] .' <'. $params_email['email'] .'>',
        );

		if(ENVIRONMENT == "DEVELOPMENT"){
			$options['recipients']= $config['email_testing'];
		}

        $body = "";
        if ($params_email['Plataforma'] !== '')
        {
        	$body.= "<p>Plataforma: ".$params_email['Plataforma']."</p>";
        }

		$body.= "<p>Contacto: ".$params_email['name']."</p>";
		$body.= "<p>E-mail: ".$params_email['email']."</p>";
		$body.= "<p>Tele&acute;fono: ".$params_email['phone']."</p>";

		$body.= "<p>&nbsp;</p>";

        $body.= $params_email['message'];
        $mensaje = '<html><head><title>Notificaciones</title></head><body>[[tracking_beacon]] '. $body .'</body></html>';


		$madmimi= new MadMimi();
		$transaction_id = $madmimi->SendHTML($options, $mensaje);

		//echo $transaction_id;die();
		if(isset($transaction_id)){
			return 1;
		}

        return 0;
	}

	if(trim($_POST['name'])==""){
		$has_error['name']= "Nombre es requerido";
	}
	if(trim($_POST['email'])=="" AND trim($_POST['phone'])==""){
		$has_error['email']= "Déjanos por lo menos uno de tus datos para poder contactarte.";
	}

	if(isset($_POST['message']) && trim($_POST['message'])==""){
		$has_error['message']= "Mensaje es requerido";
	}
	if(isset($_POST['g-recaptcha-response']) && trim($_POST['g-recaptcha-response'])==""){
		$has_error['g-recaptcha-response']= "Por favor, confirma que no eres un robot";

        $ip = $_SERVER['REMOTE_ADDR'];

        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $config['recaptcha_secretKey'] . "&response=" . $_POST['g-recaptcha-response'] . "&remoteip=" . $ip);
        $responseKeys = json_decode($response, true);

        if (intval($responseKeys["success"]) !== 1) {
            $has_error['g-recaptcha-response']= "Por favor, confirma que no eres un robot";
        }
	}




	if(count($has_error)<=0){
		$success= send_madmimi($_POST);
	}
}

