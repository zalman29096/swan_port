<?php 
 	
	require('config.php');

	function create_confirmation_email($lang,$fields){
		$disciplines = "";
		foreach($fields as $field){
			$disciplines .= $field['discipline'];
			$disciplines .= "<br>";
		}

		$msg1 = "";
		$mail_header = "";
		$success_string_en = "<h1 style = 'text-align : center'>You have successfully registered to our competition</h1><h3 style = 'text-align : center'>We send you a confirmation email.<br></h3><h1 style = 'text-align : center'>Thank You!</h1>";


		$success_string_fi = "<h1 style = 'text-align : center'>Te olette rekisteröityneet kilpailuun</h1><h3 style = 'text-align : center'>Lähetämme sinulle vahvistuksen sähköposti</h3><h1 style = 'text-align : center'>Kiitos!</h1>";


		$success_string_ru = "<h1 style = 'text-align : center'>Вы были успешно зарегистрированы в нашем конкурсе</h1><h3 style = 'text-align : center'>Мы отправили вам письмо с вашими данными</h3><h1 style = 'text-align : center'>Спасибо!</h1>";


		$error_string_en = "<h1>Sorry, but something is wrong and your transaction can not be approved. Dont worry, your money are not transfered!<br> Please try later or contact support team.<br>Email : ".$admin_config['info_email']."</h1>";

		$error_string_fi = "<h1>Anteeksi, mutta jotain on pielessä ja tapahtumaa ei voida hyväksyä. Älä huoli, rahaa ei ole mennyt!<br> Yritä myöhemmin tai ota yhteyttä tukiryhmän.<br>Email : ".$admin_config['info_email']."</h1>";

		$error_string_ru = "<h1>Извините, но что-то пошло не так, и ваша оплата не может быть подтверждена. Не волнуйтесь, ваши деньги не были переведены! <br>Пожалуйста, попробуйте повторно пройти регистрацию позже или обратитесь в службу поддержки.<br>Email : ".$admin_config['info_email']."</h1>";


		$msg_en = "<html><body>";
		$msg_en .= "<h2>Thank you for registration in our competition!</h2>";
		$msg_en .= "<table rules='all' style='border-color: #666;' cellpadding='10'>";
		$msg_en .= "<tr style='background: #eee;'><td><strong>Man name:</strong> </td><td>" . $fields[0]['man_name'] . "</td></tr>";
		$msg_en .= "<tr><td><strong>Man surname:</strong> </td><td>" . $fields[0]['man_surname'] . "</td></tr>";
		$msg_en .= "<tr style='background: #eee;'><td><strong>Man's birthday date:</strong> </td><td>" . $fields[0]['man_bdate'] . "</td></tr>";
		$msg_en .= "<tr><td><strong>Man's WDSF ID:</strong> </td><td>" . $fields[0]['man_id'] . "</td></tr>";
		$msg_en .= "<tr style='background: #eee;'><td><strong>Lady name:</strong> </td><td>" . $fields[0]['woman_name'] . "</td></tr>";
		$msg_en .= "<tr><td><strong>Lady surname:</strong> </td><td>" . $fields[0]['woman_surname'] . "</td></tr>";
		$msg_en .= "<tr style='background: #eee;'><td><strong>Lady's birthday date:</strong> </td><td>" . $fields[0]['woman_bdate'] . "</td></tr>";
		$msg_en .= "<tr><td><strong>Lady's WDSF ID:</strong> </td><td>" . $fields[0]['woman_id'] . "</td></tr>";
		$msg_en .= "<tr style='background: #eee;'><td><strong>Country:</strong> </td><td>" . $fields[0]['country'] . "</td></tr>";
		$msg_en .= "<tr><td><strong>City:</strong> </td><td>" . $fields[0]['city'] . "</td></tr>";
		$msg_en .= "<tr style='background: #eee;'><td><strong>Coach:</strong> </td><td>" . $fields[0]['coach'] . "</td></tr>";
		$msg_en .= "<tr><td><strong>Phone:</strong> </td><td>" . $fields[0]['phone'] . "</td></tr>";
		$msg_en .= "<tr style='background: #eee;'><td><strong>Email:</strong> </td><td>" . $fields[0]['email'] . "</td></tr>";
		$msg_en .= "<tr><td><strong>Disciplines:</strong> </td><td>" . $disciplines . "</td></tr>";
		$msg_en .= "</table>";
		$msg_en .= "</body></html>";
		$mail_header_en = "Registration in our competition";

		$msg_fi = "<html><body>";
		$msg_fi .= "<h2>Kiitos etta rekisteröinyt palvelulla!</h2>";
		$msg_fi .= "<table rules='all' style='border-color: #666;' cellpadding='10'>";
		$msg_fi .= "<tr style='background: #eee;'><td><strong>Miehen nimi:</strong> </td><td>" . $fields[0]['man_name'] . "</td></tr>";
		$msg_fi .= "<tr><td><strong>Miehen sukunimi:</strong> </td><td>" . $fields[0]['man_surname'] . "</td></tr>";
		$msg_fi .= "<tr style='background: #eee;'><td><strong>Miehen syntymäaika:</strong> </td><td>" . $fields[0]['man_bdate'] . "</td></tr>";
		$msg_fi .= "<tr><td><strong>Miehen WDSF ID:</strong> </td><td>" . $fields[0]['man_id'] . "</td></tr>";
		$msg_fi .= "<tr style='background: #eee;'><td><strong>Naisen nimi:</strong> </td><td>" . $fields[0]['woman_name'] . "</td></tr>";
		$msg_fi .= "<tr><td><strong>Naisen sukunimi:</strong> </td><td>" . $fields[0]['woman_surname'] . "</td></tr>";
		$msg_fi .= "<tr style='background: #eee;'><td><strong>Naisen syntymäaika:</strong> </td><td>" . $fields[0]['woman_bdate'] . "</td></tr>";
		$msg_fi .= "<tr><td><strong>Naisen WDSF ID:</strong> </td><td>" . $fields[0]['woman_id'] . "</td></tr>";
		$msg_fi .= "<tr style='background: #eee;'><td><strong>Maa:</strong> </td><td>" . $fields[0]['country'] . "</td></tr>";
		$msg_fi .= "<tr><td><strong>Kaupunki:</strong> </td><td>" . $fields[0]['city'] . "</td></tr>";
		$msg_fi .= "<tr style='background: #eee;'><td><strong>Valmetaja:</strong> </td><td>" . $fields[0]['coach'] . "</td></tr>";
		$msg_fi .= "<tr><td><strong>Puhelinnumero:</strong> </td><td>" . $fields[0]['phone'] . "</td></tr>";
		$msg_fi .= "<tr style='background: #eee;'><td><strong>Sähköposti:</strong> </td><td>" . $fields[0]['email'] . "</td></tr>";
		$msg_fi .= "<tr><td><strong>Valitut luokat:</strong> </td><td>" . $disciplines . "</td></tr>";
		$msg_fi .= "</table>";
		$msg_fi .= "</body></html>";
		$mail_header_fi = "Rekisteröinti";

		$msg_ru = "<html><body>";
		$msg_ru .= "<h2>Благодарим за регистрацию</h2>";
		$msg_ru .= "<table rules='all' style='border-color: #666;' cellpadding='10'>";
		$msg_ru .= "<tr style='background: #eee;'><td><strong>Имя партнера:</strong> </td><td>" . $fields[0]['man_name'] . "</td></tr>";
		$msg_ru .= "<tr><td><strong>Фамилия партнера:</strong> </td><td>" . $fields[0]['man_surname'] . "</td></tr>";
		$msg_ru .= "<tr style='background: #eee;'><td><strong>Дата рождения партнера:</strong> </td><td>" . $fields[0]['man_bdate'] . "</td></tr>";
		$msg_ru .= "<tr><td><strong>WDSF ID партнера:</strong> </td><td>" . $fields[0]['man_id'] . "</td></tr>";
		$msg_ru .= "<tr style='background: #eee;'><td><strong>Имя партнерши:</strong> </td><td>" . $fields[0]['woman_name'] . "</td></tr>";
		$msg_ru .= "<tr><td><strong>Фамилия партнерши:</strong> </td><td>" . $fields[0]['woman_surname'] . "</td></tr>";
		$msg_ru .= "<tr style='background: #eee;'><td><strong>Дата рождения партнерши:</strong> </td><td>" . $fields[0]['woman_bdate'] . "</td></tr>";
		$msg_ru .= "<tr><td><strong>WDSF ID партнерши:</strong> </td><td>" . $fields[0]['woman_id'] . "</td></tr>";
		$msg_ru .= "<tr style='background: #eee;'><td><strong>Страна:</strong> </td><td>" . $fields[0]['country'] . "</td></tr>";
		$msg_ru .= "<tr><td><strong>Город:</strong> </td><td>" . $fields[0]['city'] . "</td></tr>";
		$msg_ru .= "<tr style='background: #eee;'><td><strong>Тренер:</strong> </td><td>" . $fields[0]['coach'] . "</td></tr>";
		$msg_ru .= "<tr><td><strong>Телефон:</strong> </td><td>" . $fields[0]['phone'] . "</td></tr>";
		$msg_ru .= "<tr style='background: #eee;'><td><strong>Email:</strong> </td><td>" . $fields[0]['email'] . "</td></tr>";
		$msg_ru .= "<tr><td><strong>Категории:</strong> </td><td>" . $disciplines . "</td></tr>";
		$msg_ru .= "</table>";
		$msg_ru .= "</body></html>";
		$mail_header_ru = "Регистрация";

		$msg2 = "<html><body>";
		$msg2 .= "<h2>New customer registered!</h2>";
		$msg2 .= "<table rules='all' style='border-color: #666;' cellpadding='10'>";
		$msg2 .= "<tr style='background: #eee;'><td><strong>Man name:</strong> </td><td>" . $fields[0]['man_name'] . "</td></tr>";
		$msg2 .= "<tr><td><strong>Man surname:</strong> </td><td>" . $fields[0]['man_surname'] . "</td></tr>";
		$msg2 .= "<tr style='background: #eee;'><td><strong>Man's birthday date:</strong> </td><td>" . $fields[0]['man_bdate'] . "</td></tr>";
		$msg2 .= "<tr><td><strong>Man's WDSF ID:</strong> </td><td>" . $fields[0]['man_id'] . "</td></tr>";
		$msg2 .= "<tr style='background: #eee;'><td><strong>Lady name:</strong> </td><td>" . $fields[0]['woman_name'] . "</td></tr>";
		$msg2 .= "<tr><td><strong>Lady surname:</strong> </td><td>" . $fields[0]['woman_surname'] . "</td></tr>";
		$msg2 .= "<tr style='background: #eee;'><td><strong>Lady's birthday date:</strong> </td><td>" . $fields[0]['woman_bdate'] . "</td></tr>";
		$msg2 .= "<tr><td><strong>Lady's WDSF ID:</strong> </td><td>" . $fields[0]['woman_id'] . "</td></tr>";
		$msg2 .= "<tr style='background: #eee;'><td><strong>Country:</strong> </td><td>" . $fields[0]['country'] . "</td></tr>";
		$msg2 .= "<tr><td><strong>City:</strong> </td><td>" . $fields[0]['city'] . "</td></tr>";
		$msg2 .= "<tr style='background: #eee;'><td><strong>Coach:</strong> </td><td>" . $fields[0]['coach'] . "</td></tr>";
		$msg2 .= "<tr><td><strong>Phone:</strong> </td><td>" . $fields[0]['phone'] . "</td></tr>";
		$msg2 .= "<tr style='background: #eee;'><td><strong>Email:</strong> </td><td>" . $fields[0]['email'] . "</td></tr>";
		$msg2 .= "<tr><td><strong>Disciplines:</strong> </td><td>" . $disciplines . "</td></tr>";
		$msg2 .= "</table>";
		$msg2 .= "</body></html>";

		$success_header = "";
		$error_header = "";


		if($lang == 'en'){
			$success_header = $success_string_en;
			$error_header = $error_string_en;
			$msg1 = $msg_en;
			$mail_header = $mail_header_en;
		}else{
			if($lang == 'fi'){
				$success_header = $success_string_fi;
				$error_header = $error_string_fi;	
				$msg1 = $msg_fi;
				$mail_header = $mail_header_fi;
			}else{
				$success_header = $success_string_ru;
				$error_header = $error_string_ru;	
				$msg1 = $msg_ru;
				$mail_header = $mail_header_ru;
			}
		}

		$email_data = array();
		$email_data['email_address'] = $fields[0]['email'];
		$email_data['msg'] = $msg1;
		$email_data['success_header'] = $success_header;
		$email_data['error_header'] = $error_header;
		$email_data['mail_header'] = $mail_header;
		$email_data['msg2'] = $msg2;
		return $email_data;
	
	}

	function send_mail($to, $subject, $message){
		
		$headers = "From:".$admin_config['info_email']."\r\n";
		$headers .= "Reply-To:".$admin_config['info_email']."\r\n";
		//$headers .= "CC: admin@tanssiurheilu.com\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

		if(mail($to, $subject, $message, $headers)){
			return true;		
		}else{
			return false;		
		}
	}
	
	function print_error($isCredit,$ermsg){
		if(!$isCredit){
			echo "Sorry, there are problems with database. Don't worry, your money are not transfered. Please, try later or send a mail to ".$admin_config['info_email']."";	
		}else{
			if(send_mail($admin_config['error_email'],'Error', $ermsg)){ 
				echo "Sorry, there are problems with database. We will contact with you soon.";}
			else{
				echo "Sorry, there are problems with database. Please, send a mail to info@finlandopen.fi. Also attach your reference number which is : $token";}
					
		}
		exit;			
	}

	function open_db_connection($isCredit = false){
		global $db_config;
		$ermsg = "open_db_connection() Credit : ".$isCredit."";
		$conn = mysql_connect($db_config['host'],$db_config['login'],$db_config['password']);
		if(!$conn){
			 print_error($isCredit,$ermsg);
		}
	   	$db = mysql_select_db($db_config['name'], $conn);
		if(!$db){
			 print_error($isCredit,$ermsg);	
		}
		else{
			//echo "select db success";
			return $conn;
		}	
	}
	
	function do_db_operation($sql, $isCredit = false){
		$ermsg = "do_db_operation() Credit : ".$isCredit."";
		$connection_to_db = open_db_connection($isCredit);
		if (mysql_query($sql,$connection_to_db)) {	
			mysql_close($connection_to_db);
			return true;
			//echo "Success"; 	
		} else {
			mysql_close($connection_to_db);
			print_error($isCredit,$ermsg);	
		}
	}

	
	function save($data, $token){
		$ermsg = "save()  Token : ".$token;
	
		$disciplines = $data['disciplines'];

		$man_name = $data['man_name'];
		$man_surname = $data['man_surname'];
		$email = $data['email'];
		$country = $data['country'];
		$woman_id = $data['woman_id'];
		$man_id = $data['man_id'];
		$man_bdate = $data['man_bdate'];
		$woman_bdate = $data['woman_bdate'];
		$woman_name = $data['woman_name'];
		$woman_surname = $data['woman_surname'];
		$city = $data['city'];
		$coach = $data['coach'];
		$club = $data['club'];
		$phone = $data['phone'];
		$buyer_name = $data['buyer-name'];
		$buyer_surname = $data['buyer-surname'];
		$buyer_address = $data['buyer-address'];
		$buyer_pcode = $data['buyer-pcode'];
		$buyer_city = $data['buyer-city'];
		$buyer_country = $data['buyer-country'];



		foreach($disciplines as $key => $val){

			$sql = "INSERT INTO customers (man_name, man_surname, man_id, man_bdate, woman_name, woman_surname, woman_id, woman_bdate, email, club, country, city, coach, phone, discipline, token, confirmed, buyer_name, buyer_surname, buyer_address, buyer_pcode, buyer_city, buyer_country) VALUES ('".$man_name."','".$man_surname."','".$man_id."','".$man_bdate."','".$woman_name."','".$woman_surname."','".$woman_id."','".$woman_bdate."','".$email."', '".$club."','".$country."', '".$city."','".$coach."','".$phone."', '".$key."','".$token."','0','".$buyer_name."','".$buyer_surname."','".$buyer_address."','".$buyer_pcode."','".$buyer_city."','".$buyer_country."')";
			
		
			if(!do_db_operation($sql)){
				print_error($isCredit,$ermsg);	
			}
		}
	}
	
	function update($signal,$token,$isCredit){

		$ermsg = "update Credit : ".$isCredit."  Token : ".$token;
		

		$sql_update = "UPDATE customers SET confirmed = '".$signal."' WHERE token = '".$token."'";
		

		if(!do_db_operation($sql_update, $isCredit)){
			print_error($isCredit,$ermsg);	
		}

		
		
	}
	
	function get_all($field,$value,$isCredit){
		$all = 0;
		$ermsg = "get_all  Credit : ".$isCredit."  Token : ".$value;
		$connection_to_db = open_db_connection();
		$sql_get = "SELECT * FROM customers WHERE ".$field."='".$value."'";
		$all_fields_obtained = mysql_query($sql_get,$connection_to_db);
		
		if(!$all_fields_obtained) {	
			print_error($isCredit,$ermsg);	
		}
		$final = array(); 
		$index = 0;
		while($row = mysql_fetch_assoc($all_fields_obtained)){
     			$final[$index] = $row;
     			$index++;
		}

		mysql_close($connection_to_db);
		return $final;
	}

	
	
	


?>
