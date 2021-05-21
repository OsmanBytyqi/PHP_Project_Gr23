<?php 
session_start();
require 'vendor/autoload.php';

$fb = new Facebook\Facebook([
	'app_id' => '159677182831768',
	'app_secret' => '5a78200bd434a631990505894a182c5c',
	'default_graph_version' => 'v2.10' 
]);

$helper = $fb->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl("http://localhost/ProjektiPHP/fb-login/index.php");// pathi
try {
		$accessToken = $helper->getAccessToken();
		if (isset($accessToken)) {
			$_SESSION['access_token']  = (string)$accessToken;
			header("Location:index.php");
		}
} catch (Exception $e) {
		echo $e->getTraceAsString();
}

if (isset($_SESSION['access_token'])) {
	try {
		$fb->setDefaultAccessToken($_SESSION['access_token']);
		$res = $fb->get('/me?locale=en_US&fields=name,email');
		$user = $res->getGraphuser();

	} catch (Exception $e) {
		echo $e->getTraceAsString();
	}
}
