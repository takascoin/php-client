TAKASCOIN PAYMENT API - PHP Client Library
================================

PHP client library for Takascoin API


##About Takascoin

Takascoin is an online Bitcoin exchange platform. Takascoin is also a payment services provider for merchants.

##Get started

Just include takascoin.php in your document and use it freely.

```
require_once('./takascoin.php');

$takas = new Takascoin();

$amount  = 10;
$apiKey  = "Takas merchant email";
$options = array(
	'currency' 	  => 'TRY', // OR 'BTC'
	'item'     	  => 'T-shirt',
	'description' => '100% cotton natural T-shirt'
);

$payment = $takas->payment($amount, $apiKey);

var_dump($payment);


// $payment['url']; 	    # payment frame url to display to user
// $payment['html']; 	    # default behaviour, includes an iframe and js listener
// $payment['address'];   	# display payment address

```

###List of all commands:
- payment($amount, $apiKey, $options);                            - creates payment
- button($amount, $apiKey, $options);                             - prepares a button template
- validateNotification($hash, $orderID, $invoiceID, $secret);     - checks if incoming payment notification is valid.
- status($invoiceID);                                             - current status of invoice [new,approved,confirmed,completed,cancelled]
- invoice($invoiceID);                                            - get latest invoice object


Your feedback and suggestions are very much welcome. Please contact info@takascoin.com for any input. 

Enjoy!

Takascoin

