<?php

	require_once('./takascoin.php');

	function createPayment($amount, $apiKey) {
		$takas = new Takascoin();

		$payment = $takas->payment($amount, $apiKey);

		var_dump($payment);

		if ($payment['success']) {
			$status = $takas->status($payment['id']);

			var_dump($status);
		}
	}
 
	function getButton($amount, $apiKey) {
		$takas = new Takascoin();

		$button = $takas->button($amount, $address);

		var_dump($button);
	}
	
	
	$amount        = 0.0005;
	$apiKey       = "{Takas_merchant_email}";
	$currency      = "BTC"; // or 'TRY'

	//createPayment($amount, $currency, $address);
	//getButton($amount, $currency, $address);

?>
