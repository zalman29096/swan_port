<?php
	require('helper.php');
	require('PPBootStrap.php');
	require('config.php');


		$paypalService = new PayPalAPIInterfaceServiceService($paypal_config);

	
		$paymentDetails= new PaymentDetailsType();

		$i = 0;

		$itemTotalValue = 0;

		foreach($_POST['disciplines'] as $key => $val){
			$itemAmount = new BasicAmountType('EUR', $validationArray[$key]);	
			$itemTotalValue += $validationArray[$key]; 
			$itemDetails = new PaymentDetailsItemType();
			$itemDetails->Name = $key;
			$itemDetails->Amount = $itemAmount;
			$itemDetails->Quantity = 1;
			$paymentDetails->PaymentDetailsItem[$i] = $itemDetails;	
			$i++;
		}

		$orderTotal = new BasicAmountType();
		$orderTotal->currencyID = 'EUR';
		$orderTotal->value = $itemTotalValue; 

		$paymentDetails->OrderTotal = $orderTotal;
		$paymentDetails->PaymentAction = 'Sale';


	
		$setECReqDetails = new SetExpressCheckoutRequestDetailsType();
		$setECReqDetails->NoShipping = 1;
		$setECReqDetails->PaymentDetails[0] = $paymentDetails;

		$setECReqDetails->ReturnURL = $paypal_config['return_url'].$_POST['language'];
		$setECReqDetails->CancelURL = $paypal_config['cancel_url'];


		$setECReqType = new SetExpressCheckoutRequestType();
		$setECReqType->Version = '109.0';
		$setECReqType->SetExpressCheckoutRequestDetails = $setECReqDetails;

		$setECReq = new SetExpressCheckoutReq();
		$setECReq->SetExpressCheckoutRequest = $setECReqType;

		$setECResponse = $paypalService->SetExpressCheckout($setECReq);


		save($_POST, $setECResponse->Token);

		header("Location:".$paypal_config['payment_url'].$setECResponse->Token."");

?>
