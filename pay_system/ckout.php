<?php
	require 'vendor/autoload.php';
	use CheckoutFinland\Payment;
	use CheckoutFinland\Client;
	require('helper.php');
	require('config.php');

	$data = $_POST;
		


	$return_url = $checkout_config['return_url'].$_POST['language'];

	$payment = new  Payment($checkout_config['merchant_id'], $checkout_config['merchant_secret']);

	$payment->setUrls($return_url);

	$stamp          = time(); // unique id for the payment 
	$amount = 0; 
	foreach($data['disciplines'] as $key => $val){
		$amount += $validationArray[$key]; 	
	}
	$amount = $amount*100;
	$i = 0;
	$reference = 0;
	while($i < 10000){
		$temp = rand(100, 1000000000);
		$temp_data = get_all('token',$temp,true);
		if(empty($temp_data)){
			$reference = $temp;
			break;	
		}
		$i++;
	}
	if($reference == 0){
		echo "Sorry! We can't proceed your payment right now. Please, try later or choose another payment option.";
		exit;	
	}
	$message        = 'Test products';
	$delivery_date  = new \DateTime('2014-12-31');

	$first_name     = $data['buyer-name'];
	$family_name    = $data['buyer-surname'];
	$address        = $data['buyer-address'];
	$postcode       = $data['buyer-pcode'];
	$post_office    = $data['buyer-city'];
	$country        = 'FIN';
	$language       = 'EN';

	$payment->setOrderData($stamp, $amount, $reference, $message, $delivery_date);
	$payment->setCustomerData($first_name, $family_name, $address, $postcode, $post_office, $country, $language);

	$client = new Client();
	save($data, $reference);

	$response = $client->sendPayment($payment);

	$response_xml = @simplexml_load_string($response);


	header('Location: '.$response_xml->paymentURL);
?>
