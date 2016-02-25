<?php

require 'vendor/autoload.php';

define('SITE_URL','http://localhost/paypal_php_sdk/');

$paypal = new \PayPal\Rest\ApiContext(
	new \PayPal\Auth\OAuthTokenCredential(
		'AcW57jsCu5P6lQ9sXLMN8g3dYy1t6ikYXDXBF_llXVDosY18YqYVtFCGvKwEdXpQ7cTe_M-gvi6dVyCd',
		'EBIuBYY6gG6_ZanDwYxA62Axs00ijXjgDO5ni2-1urIaH60XDC-akBJGBxiE4MEAKly0Isg_hK3a8uPV'
	)
);