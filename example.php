<?php

	require_once('./takascoin.php');

	function createPayment($amount, $apiKey, $currency) {
		$takas = new Takascoin();

		$payment = $takas->payment($amount, $apiKey, array( 'currency' => $currency ));

		var_dump($payment);

		if ($payment['success']) {
			$status = $takas->status($payment['id']);

			var_dump($status);
		}
	}
 
	function getButton($amount, $apiKey, $currency) {
		$takas = new Takascoin();

		$button = $takas->button($amount, $address, array( 'currency' => $currency ));

		var_dump($button);
	}
	
	
	$amount   = 0.0005;
	$apiKey   = "{Takas_merchant_email}";
	$currency = "BTC"; // or 'TRY'

	//createPayment($amount, $apiKey, $currency);
	//getButton($amount, $apiKey, $currency);

?>
