<?php

	require 'vendor/autoload.php';
	require('helper.php');
	require('config.php');

	use CheckoutFinland\Response;
	header('Content-Type: text/html; charset=utf-8');

	$lang = $_GET['lang'];
	$success_msg;
	$error_msg;

	$response = new Response($checkout_config['merchant_secret']);

	$response->setRequestParams($_GET);

	$fields = get_all('token',$response->getReference(),true);
	$email_data = create_confirmation_email($lang,$fields);
	
	try{
		if($response->validate()){
			switch($response->getStatus()){
			    case '2':// These are paid and we can ship the product
				$status_string = 'PAID';
				update(2,$response->getReference(),true);
				break;
			    case '5':
				$status_string = 'PAID';
				update(5,$response->getReference(),true);
				break;
			    case '6':
				$status_string = 'PAID';
				update(6,$response->getReference(),true);
				break;
			    case '8':
				$status_string = 'PAID';
				update(8,$response->getReference(),true);
				break;
			    case '9':
				$status_string = 'PAID';
				update(9,$response->getReference(),true);
				break;
			    case '10':
				$status_string = 'PAID';
				update(10,$response->getReference(),true);
				break;
				
			    case '7':
				$status_string = 'PAID';
				update(7,$response->getReference(),true);
				break;
			    case '4':
				$status_string = 'PAID';
				update(4,$response->getReference(),true);
				break;
			    case '3':
				$status_string = 'NOPAID';
				update(3,$response->getReference(),true);
				break;
			    case '-1':
				$status_string = 'NOPAID';
				update(101,$response->getReference(),true);
				break;
			    case '-2':
				$status_string = 'NOPAID';
				update(102,$response->getReference(),true);
				break;
			    case '-3':
				$status_string = 'NOPAID';
				update(103,$response->getReference(),true);
				break;
			    case '-4':
				$status_string = 'NOPAID';
				update(104,$response->getReference(),true);
				break;
			    case '-10':
				$status_string = 'NOPAID';
				update(110,$response->getReference(),true);
				break;
				// Cancelled by banks, Checkout Finland, time out e.g. 

			}
		}else {
			send_mail('error@tanssiurheilu.com','Error', "Problem with validate");	
			echo "Payment validation problems! Please try later or contact ".$admin_config['info_email'];
	    	}

	}
	catch(MacMismatchException $ex) {
		echo "Mac mismatch. Please try later or contact ".$admin_config['info_email'];
		$err_str1 = "";
		$err_str1 .= "Mac missmatch. Token : ";
		$err_str1 .= $response->getReference();
		send_mail($admin_config['error_email'],'Error', $err_str1);	
	} catch(UnsupportedAlgorithmException $ex) {
		echo "Unsupported algorithm. Please try later or contact ".$admin_config['info_email'];
		$err_str = "";
		$err_str .= "Unsupported algorithm. Token : ";
		$err_str .= $response->getReference();
		send_mail($admin_config['error_email'],'Error',$err_str);	
	}
	if($status_string == 'PAID'){
		send_mail($email_data['email_address'],$email_data['mail_header'] ,$email_data['msg']);
		echo $email_data['success_header'];
		send_mail($admin_config['info_email'],"New customer" ,$email_data['msg2']);
	}else{
		if($response->getStatus() == -1){
			header("Location:http://www.yoursite.com");		
		}else{
			echo $email_data['error_header'];
		}
		$msg_error = '';
		$msg_error .= "Reference : ";
		$msg_error .= $response->getReference();
		$msg_error .= "<br>";
		$msg_error .= "Status : ";
		$msg_error .= $response->getStatus();
		send_mail($admin_config['error_email'],'Error', $msg_error);	
	}

?>
