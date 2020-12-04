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

		$params_email['subject']="Landing Page";

		$options = array(
            'promotion_name' => 'Notificaciones',
            'recipients'     => $config['email_admin'],
            'bcc'     		 => $config['email_ejecutivo'],
            'subject'        => $params_email['subject'],
            'from'           => $params_email['nombre'] .' <'. $params_email['email'] .'>',
        );

		if(ENVIRONMENT == "DEVELOPMENT"){
			$options['recipients']= $config['email_testing'];
			unset($options['bcc']);
		}

        $body = "";
        if(		revisa('Plataforma'))
        {
        	$body.= "<p>Plataforma: ".$params_email['Plataforma']."</p>";
        }

		$body.= "<p>Contacto: ".$params_email['nombre']."</p>";
		$body.= "<p>E-mail: ".$params_email['email']."</p>";

		if(		revisa('telefono'))
		{
			$body.= "<p>Tel&eacute;fono: ".$params_email['telefono']."</p>";
		}

		if(		revisa('TipoSolicitud'))
		{
			$body.= "<p>Tipo de Solicitud: ".$params_email['TipoSolicitud']."</p>";
		}

		if(		revisa('institucion'))
		{
			$body.= "<p>instituci&oacute;n: ".$params_email['institucion']."</p>";
		}

		if(		revisa('puesto'))
		{
			$body.= "<p>Puesto: ".$params_email['puesto']."</p>";
		}

		if(		revisa('mensaje'))
		{
			$body.= "<p>Mensaje: ".$params_email['mensaje']."</p>";
		}


		$body.= "<p>&nbsp;</p>";

        $mensaje = '<html><head><title>Notificaciones</title></head><body>[[tracking_beacon]] '. $body .'</body></html>';


		$madmimi= new MadMimi();
		$transaction_id = $madmimi->SendHTML($options, $mensaje);

		//echo $transaction_id;die();
		if(isset($transaction_id)){
			return 1;
		}

        return 0;
	}

	function revisa($campo)
	{
		return (isset($_POST[$campo]) && strlen($_POST[$campo]) > 0);
	}



	if(count($has_error)<=0){
		$success= send_madmimi($_POST);
	}
	else{
	}
}

