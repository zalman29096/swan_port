<?php
	require('PPBootStrap.php');
	require('helper.php');
	require('config.php');

header('Content-Type: text/html; charset=utf-8');



$token = $_GET['token'];
$fields = get_all('token',$token,false);
//***********************************************************	$paymentDetails= new PaymentDetailsType();
	$i = 0;
	$itemQuantity = '1';
	$itemTotalValue = 0;
	$disciplines = "";
	foreach($fields as $field){
		$itemAmount = new BasicAmountType('EUR', $validationArray[$field['discipline']]);	
		$itemDetails = new PaymentDetailsItemType();
		$itemDetails->Name = $field['discipline'];
		$itemDetails->Amount = $itemAmount;
		$itemDetails->Quantity = '1';
		$PaymentDetails= new PaymentDetailsType();
		$PaymentDetails->PaymentDetailsItem[$i] = $itemDetails;
		$i++;
	}


//***********************************************************

$payerId = $_GET['PayerID'];
$paymentAction = 'Sale';
$lang = $_GET['lang'];

$email_data = create_confirmation_email($lang,$fields);

$getExpressCheckoutDetailsRequest = new GetExpressCheckoutDetailsRequestType($token);
$getExpressCheckoutReq = new GetExpressCheckoutDetailsReq();
$getExpressCheckoutReq->GetExpressCheckoutDetailsRequest = $getExpressCheckoutDetailsRequest;

$paypalService = new PayPalAPIInterfaceServiceService($paypal_config);
try {

	$getECResponse = $paypalService->GetExpressCheckoutDetails($getExpressCheckoutReq);
} catch (Exception $ex) {
	update(200,$token,false);
	echo $email_data['error_header'];
	$msg_error = print_r($ex->getMessage(),true);
	send_mail($admin_config['error_email'],'Error', $msg_error);
	exit;
}



	$orderTotal = new BasicAmountType();
	$orderTotal->currencyID = $getECResponse->GetExpressCheckoutDetailsResponseDetails->PaymentDetails[0]->OrderTotal->currencyID;
	$orderTotal->value = $getECResponse->GetExpressCheckoutDetailsResponseDetails->PaymentDetails[0]->OrderTotal->value;

	$paymentDetails= new PaymentDetailsType();
	$paymentDetails->OrderTotal = $orderTotal;
	$paymentDetails->PaymentAction = 'Sale';
	if(isset($_REQUEST['notifyURL']))
	{
		$paymentDetails->NotifyURL = $_REQUEST['notifyURL'];
	}

	$DoECRequestDetails = new DoExpressCheckoutPaymentRequestDetailsType();
	$DoECRequestDetails->PayerID = $payerId;
	$DoECRequestDetails->Token = $token;
	$DoECRequestDetails->PaymentAction = $paymentAction;
	$DoECRequestDetails->PaymentDetails[0] = $paymentDetails;

	$DoECRequest = new DoExpressCheckoutPaymentRequestType();
	$DoECRequest->DoExpressCheckoutPaymentRequestDetails = $DoECRequestDetails;


	$DoECReq = new DoExpressCheckoutPaymentReq();
	$DoECReq->DoExpressCheckoutPaymentRequest = $DoECRequest;

	try {

		update(1,$token,false);
		$DoECResponse = $paypalService->DoExpressCheckoutPayment($DoECReq);
	} catch (Exception $ex) {
		$updated_to_success = false;
		update(200,$token,false);
		
		echo $email_data['error_header'];
		$msg_error = print_r($ex->getMessage(),true);
		send_mail($admin_config['error_email'],'Error', $msg_error);
		exit;
	}




	

	if(isset($DoECResponse)) {
		if($DoECResponse->Ack == 'Success'){
			send_mail($fields[0]['email'], $email_data['mail_header'] ,$email_data['msg']);
			echo $email_data['success_header'];

			send_mail($admin_config['info_email'],"New customer" ,$email_data['msg2']);
		}else{
			if($DoECResponse->Ack == 'Failure'){
				echo $email_data['error_header'];

				$msg_error = "<pre>".print_r($DoECResponse,true)."</pre>";
				$sent = send_mail($admin_config['error_email'],'Error', $msg_error);
				if((isset($DoECResponse->DoExpressCheckoutPaymentResponseDetails->PaymentInfo)) && $sent) {
					echo "<h2>Your transaction id is : ".$token."<br>Please tell it to us if commiting error report!";
				}

				update(200,$token,false);
				
				exit;
			}else{
				echo $email_data['success_header'];
				$msg_warn = "<pre>".print_r($DoECResponse,true)."</pre>";
				$sent = send_mail($admin_config['error_email'],'Warning', $msg_warn);
				update(100,$token,false);		
			}
		}
	}

	


?>
