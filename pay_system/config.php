<?php



	$paypal_config = array(
        	'mode' => 'sandbox', 
 		'acct1.UserName' => 'zalman29096-facilitator_api1.gmail.com',
		'acct1.Password' => 'WD5EKTW7RFHFUQ9P',
		'acct1.Signature' => 'AFcWxV21C7fd0v3bYYYRCpSSRl31AFoFOw40yHm5l7kJOZnz50vq3z-z',
		'return_url' => 'http://yoursite.com/doxprs.php?lang=',
		'cancel_url' => 'http://yoursite.com',
		'payment_url' => 'https://sandbox.paypal.com/cgi-bin/webscr?cmd=_express-checkout&token='

	);
	$checkout_config = array(
		'merchant_id' => '375917',
		'merchant_secret' => 'SAIPPUAKAUPPIAS',
		'return_url' => 'http://yoursite.com/dockout.php?lang='
	);
	$db_config = array(
		'host' => 'hostname:port',
		'login' => 'yourlogin',
		'password' => 'passwd',
		'name' => 'database_name'	
	);
	$admin_config = array(
		'login' => 'admin',
		'password' => 'admin_password',
		'info_email' => 'info@yoursite.com',
		'error_email' => 'error@yoursite.com'
	);

	$validationArray = array(
			'service_1' => 50,
			'service_2' => 50,
			'service_3' => 60,
			'service_4' => 60,
			'service_5' => 60,
			'service_6' => 60,
			'service_7' => 60,
			'service_8' => 60,
			'service_9' => 30,
			'service_10' => 30,
			'service_11' => 25,
			'service_12' => 30,
			'service_13' => 30,
			'service_14' => 30,
			'service_15' => 30,
			'service_16' => 60,
			'service_17' => 60,
			'service_18' => 50,
			'service_19' => 60,
			'service_20' => 45,
			'service_21' => 40,
			'service_22' => 40,
			'service_23' => 30,
			'service_24' => 60,
			'service_25' => 60,
			'service_26' => 50,
			'service_27' => 60,
			'service_28' => 45,
			'service_29' => 40,
			'service_30' => 40,
			'service_31' => 30,
		);


?>
