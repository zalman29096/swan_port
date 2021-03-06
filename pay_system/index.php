<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<script src = "js/jquery-1.9.1.min.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src="js/jquery.datetimepicker.js"></script>
</head>
<body>
<input type = "button" class = "btn btn-success btn-lg" value = "Fin" onClick = "change_lang('fi')"></input>
<input type = "button" class = "btn btn-success btn-lg" value = "Eng" onClick = "change_lang('en')"></input>
<input type = "button" class = "btn btn-success btn-lg" value = "Rus" onClick = "change_lang('ru')"></input>
<div>

<!--<label>
	<input class = "checkbox-inline" type="checkbox" id="slide" value="0"> slide steps?
</label>-->
	<h1 id = "form-header" class = "form-header localized" style = "text-align : center">Registration form</h1><br>
	
<input id = "total-price" type = "button" class = "btn btn-success btn-lg" value = "Sum : 0 €"></input>

<form class = "form-inline" id = "reg-form" action = "xprs.php" method = "POST">
	<div id = "main-form">
	<div class = "step-header">
		<h2 id = "select-cats" class = "localized">Choose services</h2>
		<!--<input type = "button" id = "show-first-day-cats" class = "btn btn-default btn-primary" value = " Show First Day Categories"></input>
		<input type = "button" id = "show-second-day-cats" class = "btn btn-default btn-primary" value = " Show Second Day Categories"></input>
		<input type = "button" id = "show-third-day-cats" class = "btn btn-default btn-primary" value = " Show Third Day Categories"></input>-->
	</div>
	<div id = "first-step" class = "step">
		<div id = "first-day-container">
					<div class = "container">
			<fieldset id = "first-day-cats" class = "cats">


						<div class = "col-lg-4">
							<h3 id = "day-one" class = "localized"><b>Date 1</b></h3>
							<div class = "row">
								<div class = "col-lg-12 col-md-5 col-sm-7 col-xs-12">
									<label><input name = "disciplines[service_1]"class = "checkbox-inline" type="checkbox"  value="50">Service 1</label>
									<label><input name = "disciplines[service_2]" class = "checkbox-inline" type="checkbox"  value="50">Service 2</label>
									<label><input name = "disciplines[service_3]"  data-index = "a"  class = "checkbox-inline" type="checkbox"  value="60">Service 3(A)</label>
									<label><input name = "disciplines[service_4]"  data-index = "a"  class = "checkbox-inline" type="checkbox"  value="60">Service 4(A)</label>
									<label><input name = "disciplines[service_5]"  data-index = "a"  class = "checkbox-inline" type="checkbox"  value="60">Service 5(A)</label>
									<label><input name = "disciplines[service_6]" class = "checkbox-inline" type="checkbox"  value="60">Service 6</label>
								</div>

								<div class = "col-lg-12 col-md-5 col-sm-7 col-xs-12">
									<label><input name = "disciplines[service_7]" data-index = "a"  class = "checkbox-inline" type="checkbox"  value="60">Service 7(A)</label>



									<label><input name = "disciplines[service_8]" class = "checkbox-inline" type="checkbox"  value="60">Service 8</label>
									<label><input name = "disciplines[service_9]" class = "checkbox-inline" type="checkbox"  value="30">Service 9</label>
									<label><input name = "disciplines[service_10]" class = "checkbox-inline" type="checkbox"  value="30">Service 10</label>
									<label><input name = "disciplines[service_11]" class = "checkbox-inline" type="checkbox" value="25">Service 11</label>
									<label><input name = "disciplines[service_12]" class = "checkbox-inline" type="checkbox"  value="30">Service 12</label>
								</div>
								<div class = "col-lg-12 col-md-5 col-sm-7 col-xs-12">
									<label><input name = "disciplines[service_13]" class = "checkbox-inline" type="checkbox"  value="30">Service 13</label>
									<label><input name = "disciplines[service_14]" class = "checkbox-inline" type="checkbox"  value="30">Service 14</label>


									<label><input name = "disciplines[service_15]" class = "checkbox-inline" type="checkbox"  value="30">Service 15</label>
								</div>
							</div>
						</div>

						<div class = "col-lg-4">
							<h3 id = "day-two" class = "localized"><b>Date 2</b></h3>
							<div class  = 'row'>
								<div class = "col-lg-12 col-md-5 col-sm-7 col-xs-12">
									<label><input name = "disciplines[service_16]" data-index = "a"  class = "checkbox-inline" type="checkbox" value="60">Service 16(A)</label>
									<label><input name = "disciplines[service_17]" data-index = "a"  class = "checkbox-inline" type="checkbox" value="60">Service 17(A)</label>
									<label><input name = "disciplines[service_18]" data-index = "a"  class = "checkbox-inline" type="checkbox"  value="50">Service 18(A)</label>
									<label><input name = "disciplines[service_19]" data-index = "a"  class = "checkbox-inline" type="checkbox"  value="60">Service 19(A)</label>
								</div>
								<div class = "col-lg-12 col-md-5 col-sm-7 col-xs-12">
									<label><input name = "disciplines[service_20]" class = "checkbox-inline" type="checkbox"  value="45">Service 20</label>
									<label><input name = "disciplines[service_21]" class = "checkbox-inline" type="checkbox"  value="40">Service 21</label>
									<label><input name = "disciplines[service_22]" class = "checkbox-inline" type="checkbox"  value="40">Service 22</label>
									<label><input name = "disciplines[service_23]" class = "checkbox-inline" type="checkbox"  value="30">Service 23</label>
								</div>
							</div>
						</div>
						<div class = "col-lg-4">
							<h3 id = "day-three" class = "localized"><b>Date 3</b></h3>
							<div class = "row">
								<div class = "col-lg-12 col-md-5 col-sm-7 col-xs-12">
									<label><input name = "disciplines[service_24]" data-index = "a"  class = "checkbox-inline" type="checkbox" value="60">Service 24(A)</label>
									<label><input name = "disciplines[service_25]" data-index = "a"  class = "checkbox-inline" type="checkbox"  value="60">Service 25(A)</label>
									<label><input name = "disciplines[service_26]" data-index = "a"  class = "checkbox-inline" type="checkbox"  value="50">Service 26(A)</label>
									<label><input name = "disciplines[service_27]" data-index = "a"  class = "checkbox-inline" type="checkbox"  value="60">Service 27(A)</label>
								</div>

								<div class = "col-lg-12 col-md-5 col-sm-7 col-xs-12">
									<label><input name = "disciplines[service_28]" class = "checkbox-inline" type="checkbox"  value="45">Service 28</label>
									<label><input name = "disciplines[service_29]" class = "checkbox-inline" type="checkbox"  value="40">Service 29</label>
									<label><input name = "disciplines[service_30]" class = "checkbox-inline" type="checkbox" value="40">Service 30</label>
									<label><input name = "disciplines[service_31]" class = "checkbox-inline" type="checkbox"  value="30">Service 31</label>
								</div>
							</div>
						</div>


			<hr/>

			</fieldset>
					</div>
		</div>
	
	</div>

	<div class = "step-header">
		<h2 id = "fill-details" class = "localized">Fill in all the form fields <b>ONLY</b> in latin letters</h2>
		<!--<input type = "button" id = "show-first-day-cats" class = "btn btn-default btn-primary" value = " Show First Day Categories"></input>
		<input type = "button" id = "show-second-day-cats" class = "btn btn-default btn-primary" value = " Show Second Day Categories"></input>
		<input type = "button" id = "show-third-day-cats" class = "btn btn-default btn-primary" value = " Show Third Day Categories"></input>-->
	</div>

	<div id = "second-step" class = "step row">
		
		<div id = "man-info" class = "col-lg-6" >
			<h3 id  = "gentelman" class = "mwh localized"> Gentleman <span class = "glyphicon glyphicon-chevron-down"></span></h3>
			<label id = "man-name-label" class = "desc-label localized" for = "man-name" >Name* :</label>
			<input id = "man-name" class = "form-control info-input required" type="text" maxlength = "200" name = "man_name" required></input>
			<label id = "man-surname-label" class = "desc-label localized" for = "man-surname" >Surame* : </label>
			<input id = "man-surname" class = "form-control info-input required" type="text" maxlength = "200" name = "man_surname" required></input>
			<label id = "man-bdate-label" class = "desc-label localized" for = "man-bdate" >Date of Birth* : </label>
			<input id = "man-bdate" class = "form-control info-input required" type="text" maxlength = "200" name = "man_bdate" placeholder = "dd-mm-yyyy" required></input>
			    
			<label id = "man-id-label" class = "desc-label localized"  >A ID card : </label>
			<input id = "man-id" class = "form-control info-input" type="text" maxlength = "200" name = "man_id" placeholder = "obligatory only for A-type services"></input>
		</div>
		<div id = "woman-info" class = "col-lg-6">
			<h3 id = "lady" class = "mwh localized"> Lady <span class = "glyphicon glyphicon-chevron-down"></span></h3>
			<label id = "woman-name-label" class = "desc-label localized" for = "woman-name" >Name* : </label>
			<input id = "woman-name" class = "form-control info-input required" type="text" maxlength = "200" name = "woman_name" required></input>
			<label id = "woman-surname-label" class = "desc-label localized" for = "woman-surname" >Surame* : </label>
			<input id = "woman-surname" class = "form-control info-input required" type="text" maxlength = "200" name = "woman_surname" required></input>
			<label id = "woman-bdate-label" class = "desc-label localized" for = "woman-bdate" >Date of Birth* : </label>
			<input id = "woman-bdate" class = "form-control info-input required" type="text" maxlength = "200" name = "woman_bdate" placeholder = "dd-mm-yyyy" required></input>
			<label id = "woman-id-label" class = "desc-label localized" for = "woman-id" >A ID card : </label>
			<input id = "woman-id" class = "form-control info-input" type="text" maxlength = "200" name = "woman_id" placeholder = "obligatory only for A-type services"></input>
		</div>
	</div>

	<div class = "step-header">
		<h2 id = "fill-contacts" class = "localized">Additional information</h2>
		

	</div>

	<div id = "third-step" class = "step row">
		
		<div id = "contact-info" >

			<label id = "contact-country-label" class = "desc-label localized" for = "contact-country" >Country* : </label>
				<select id = "contact-country" class = "form-control info-input required" name = "country" required>

					<option value="Afghanistan">Afghanistan</option>
					<option value="Aland Islands">Aland Islands</option>
					<option value="Albania">Albania</option>
					<option value="Algeria">Algeria</option>
					<option value="American Samoa">American Samoa</option>
					<option value="Andorra">Andorra</option>
					<option value="Angola">Angola</option>
					<option value="Anguilla">Anguilla</option>
					<option value="Antarctica">Antarctica</option>
					<option value="Antigua and Barbuda">Antigua and Barbuda</option>
					<option value="Argentina">Argentina</option>
					<option value="Armenia">Armenia</option>
					<option value="Aruba">Aruba</option>
					<option value="Australia">Australia</option>
					<option value="Austria">Austria</option>
					<option value="Azerbaijan">Azerbaijan</option>
					<option value="Bahamas">Bahamas</option>
					<option value="Bahrain">Bahrain</option>
					<option value="Bangladesh">Bangladesh</option>
					<option value="Barbados">Barbados</option>
					<option value="Belarus">Belarus</option>
					<option value="Belgium">Belgium</option>
					<option value="Belize">Belize</option>
					<option value="Benin">Benin</option>
					<option value="Bermuda">Bermuda</option>
					<option value="Bhutan">Bhutan</option>
					<option value="Bolivia">Bolivia</option>
					<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
					<option value="Botswana">Botswana</option>
					<option value="Bouvet Island">Bouvet Island</option>
					<option value="Brazil">Brazil</option>
					<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
					<option value="Brunei Darussalam">Brunei Darussalam</option>
					<option value="Bulgaria">Bulgaria</option>
					<option value="Burkina Faso">Burkina Faso</option>
					<option value="Burundi">Burundi</option>
					<option value="Cambodia">Cambodia</option>
					<option value="Cameroon">Cameroon</option>
					<option value="Canada">Canada</option>
					<option value="Cape Verde">Cape Verde</option>
					<option value="Cayman Islands">Cayman Islands</option>
					<option value="Central African Republic">Central African Republic</option>
					<option value="Chad">Chad</option>
					<option value="Chile">Chile</option>
					<option value="China">China</option>
					<option value="Christmas Island">Christmas Island</option>
					<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
					<option value="Colombia">Colombia</option>
					<option value="Comoros">Comoros</option>
					<option value="Congo">Congo</option>
					<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
					<option value="Cook Islands">Cook Islands</option>
					<option value="Costa Rica">Costa Rica</option>
					<option value="Cote D'ivoire">Cote D'ivoire</option>
					<option value="Croatia">Croatia</option>
					<option value="Cuba">Cuba</option>
					<option value="Cyprus">Cyprus</option>
					<option value="Czech Republic">Czech Republic</option>
					<option value="Denmark">Denmark</option>
					<option value="Djibouti">Djibouti</option>
					<option value="Dominica">Dominica</option>
					<option value="Dominican Republic">Dominican Republic</option>
					<option value="Ecuador">Ecuador</option>
					<option value="Egypt">Egypt</option>
					<option value="El Salvador">El Salvador</option>
					<option value="Equatorial Guinea">Equatorial Guinea</option>
					<option value="Eritrea">Eritrea</option>
					<option value="Estonia">Estonia</option>
					<option value="Ethiopia">Ethiopia</option>
					<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
					<option value="Faroe Islands">Faroe Islands</option>
					<option value="Fiji">Fiji</option>
					<option value="Finland">Finland</option>
					<option value="France">France</option>
					<option value="French Guiana">French Guiana</option>
					<option value="French Polynesia">French Polynesia</option>
					<option value="French Southern Territories">French Southern Territories</option>
					<option value="Gabon">Gabon</option>
					<option value="Gambia">Gambia</option>
					<option value="Georgia">Georgia</option>
					<option value="Germany">Germany</option>
					<option value="Ghana">Ghana</option>
					<option value="Gibraltar">Gibraltar</option>
					<option value="Greece">Greece</option>
					<option value="Greenland">Greenland</option>
					<option value="Grenada">Grenada</option>
					<option value="Guadeloupe">Guadeloupe</option>
					<option value="Guam">Guam</option>
					<option value="Guatemala">Guatemala</option>
					<option value="Guernsey">Guernsey</option>
					<option value="Guinea">Guinea</option>
					<option value="Guinea-bissau">Guinea-bissau</option>
					<option value="Guyana">Guyana</option>
					<option value="Haiti">Haiti</option>
					<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
					<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
					<option value="Honduras">Honduras</option>
					<option value="Hong Kong">Hong Kong</option>
					<option value="Hungary">Hungary</option>
					<option value="Iceland">Iceland</option>
					<option value="India">India</option>
					<option value="Indonesia">Indonesia</option>
					<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
					<option value="Iraq">Iraq</option>
					<option value="Ireland">Ireland</option>
					<option value="Isle of Man">Isle of Man</option>
					<option value="Israel">Israel</option>
					<option value="Italy">Italy</option>
					<option value="Jamaica">Jamaica</option>
					<option value="Japan">Japan</option>
					<option value="Jersey">Jersey</option>
					<option value="Jordan">Jordan</option>
					<option value="Kazakhstan">Kaz370pxakhstan</option>
					<option value="Kenya">Kenya</option>
					<option value="Kiribati">Kiribati</option>
					<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
					<option value="Korea, Republic of">Korea, Republic of</option>
					<option value="Kuwait">Kuwait</option>
					<option value="Kyrgyzstan">Kyrgyzstan</option>
					<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
					<option value="Latvia">Latvia</option>
					<option value="Lebanon">Lebanon</option>
					<option value="Lesotho">Lesotho</option>
					<option value="Liberia">Liberia</option>
					<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
					<option value="Liechtenstein">Liechtenstein</option>
					<option value="Lithuania">Lithuania</option>
					<option value="Luxembourg">Luxembourg</option>
					<option value="Macao">Macao</option>
					<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic</option>
					<option value="Madagascar">Madagascar</option>
					<option value="Malawi">Malawi</option>
					<option value="Malaysia">Malaysia</option>
					<option value="Maldives">Maldives</option>
					<option value="Mali">Mali</option>
					<option value="Malta">Malta</option>
					<option value="Marshall Islands">Marshall Islands</option>
					<option value="Martinique">Martinique</option>
					<option value="Mauritania">Mauritania</option>
					<option value="Mauritius">Mauritius</option>
					<option value="Mayotte">Mayotte</option>
					<option value="Mexico">Mexico</option>
					<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
					<option value="Moldova, Republic of">Moldova, Republic of</option>
					<option value="Monaco">Monaco</option>
					<option value="Mongolia">Mongolia</option>
					<option value="Montenegro">Montenegro</option>
					<option value="Montserrat">Montserrat</option>
					<option value="Morocco">Morocco</option>
					<option value="Mozambique">Mozambique</option>
					<option value="Myanmar">Myanmar</option>
					<option value="Namibia">Namibia</option>
					<option value="Nauru">Nauru</option>
					<option value="Nepal">Nepal</option>
					<option value="Netherlands">Netherlands</option>
					<option value="Netherlands Antilles">Netherlands Antilles</option>
					<option value="New Caledonia">New Caledonia</option>
					<option value="New Zealand">New Zealand</option>
					<option value="Nicaragua">Nicaragua</option>
					<option value="Niger">Niger</option>
					<option value="Nigeria">Nigeria</option>
					<option value="Niue">Niue</option>
					<option value="Norfolk Island">Norfolk Island</option>
					<option value="Northern Mariana Islands">Northern Mariana Islands</option>
					<option value="Norway">Norway</option>
					<option value="Oman">Oman</option>
					<option value="Pakistan">Pakistan</option>
					<option value="Palau">Palau</option>
					<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
					<option value="Panama">Panama</option>
					<option value="Papua New Guinea">Papua New Guinea</option>
					<option value="Paraguay">Paraguay</option>
					<option value="Peru">Peru</option>
					<option value="Philippines">Philippines</option>
					<option value="Pitcairn">Pitcairn</option>
					<option value="Poland">Poland</option>
					<option value="Portugal">Portugal</option>
					<option value="Puerto Rico">Puerto Rico</option>
					<option value="Qatar">Qatar</option>
					<option value="Reunion">Reunion</option>
					<option value="Romania">Romania</option>
					<option value="Russian Federation">Russian Federation</option>
					<option value="Rwanda">Rwanda</option>
					<option value="Saint Helena">Saint Helena</option>
					<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
					<option value="Saint Lucia">Saint Lucia</option>
					<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
					<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
					<option value="Samoa">Samoa</option>
					<option value="San Marino">San Marino</option>
					<option value="Sao Tome and Principe">Sao Tome and Principe</option>
					<option value="Saudi Arabia">Saudi Arabia</option>
					<option value="Senegal">Senegal</option>
					<option value="Serbia">Serbia</option>
					<option value="Seychelles">Seychelles</option>
					<option value="Sierra Leone">Sierra Leone</option>
					<option value="Singapore">Singapore</option>
					<option value="Slovakia">Slovakia</option>
					<option value="Slovenia">Slovenia</option>
					<option value="Solomon Islands">Solomon Islands</option>
					<option value="Somalia">Somalia</option>
					<option value="South Africa">South Africa</option>
					<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
					<option value="Spain">Spain</option>
					<option value="Sri Lanka">Sri Lanka</option>
					<option value="Sudan">Sudan</option>
					<option value="Suriname">Suriname</option>
					<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
					<option value="Swaziland">Swaziland</option>
					<option value="Sweden">Sweden</option>
					<option value="Switzerland">Switzerland</option>
					<option value="Syrian Arab Republic">Syrian Arab Republic</option>
					<option value="Taiwan, Province of China">Taiwan, Province of China</option>
					<option value="Tajikistan">Tajikistan</option>
					<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
					<option value="Thailand">Thailand</option>
					<option value="Timor-leste">Timor-leste</option>
					<option value="Togo">Togo</option>
					<option value="Tokelau">Tokelau</option>
					<option value="Tonga">Tonga</option>
					<option value="Trinidad and Tobago">Trinidad and Tobago</option>
					<option value="Tunisia">Tunisia</option>
					<option value="Turkey">Turkey</option>
					<option value="Turkmenistan">Turkmenistan</option>
					<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
					<option value="Tuvalu">Tuvalu</option>
					<option value="Uganda">Uganda</option>
					<option value="Ukraine">Ukraine</option>
					<option value="United Arab Emirates">United Arab Emirates</option>
					<option value="United Kingdom">United Kingdom</option>
					<option value="United States">United States</option>
					<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
					<option value="Uruguay">Uruguay</option>
					<option value="Uzbekistan">Uzbekistan</option>
					<option value="Vanuatu">Vanuatu</option>
					<option value="Venezuela">Venezuela</option>
					<option value="Viet Nam">Viet Nam</option>
					<option value="Virgin Islands, British">Virgin Islands, British</option>
					<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
					<option value="Wallis and Futuna">Wallis and Futuna</option>
					<option value="Western Sahara">Western Sahara</option>
					<option value="Yemen">Yemen</option>
					<option value="Zambia">Zambia</option>
					<option value="Zimbabwe">Zimbabwe</option>
			</select>
			<label id = "contact-city-label" class = "desc-label localized" for = "contact-city" >City : </label>
			<input id = "contact-city" class = "form-control info-input" type="text" maxlength = "200" name = "city"></input>
			<label id = "contact-club-label" class = "desc-label localized" for = "contact-club" >Club : </label>
			<input id = "contact-club" class = "form-control info-input" type="text" maxlength = "200" name = "club"></input>
			<label id = "contact-coach-label" class = "desc-label localized" for = "contact-coach" >Coach : </label>
			<input id = "contact-coach" class = "form-control info-input" type="text" maxlength = "200" name = "coach"></input>
			<label id = "contact-phone-label" class = "desc-label localized" for = "contact-phone" >Phone : </label>
			<input id = "contact-phone" class = "form-control info-input" type="text" maxlength = "200" name = "phone"></input>
			<label id = "contact-email-label" class = "desc-label localized" for = "contact-email" >Email* : </label>
			<input id = "contact-email" class = "form-control info-input required" type="email" maxlength = "200" name = "email" required></input>			
		</div>

	</div>
	<input type="button" id = "check" class="btn btn-success btn-lg" value = "Continue"></input>
	</div>
	<div id = "payment">
		<div class = "container">

			<div class = "row">

				<div class = "col-lg-6" id = "ppform">
					<h2 id = "pbpp" class  = " localized">Pay with Paypal Account</h2>
					<input type = "button" class = "btn btn-lg btn-success" id = "pay-by-paypal" value = "Pay With Paypal Account" ></input>
				</div>


				<div class ="col-lg-6" id = "ccform">
					<h2 id = "pbcc" class  = "localized">Pay with Credit Card</h2>
					<label id = "buyer-name-label" class = "desc-label localized" for = "buyer-name" >Name* : </label>
					<input id = "buyer-name" class = "form-control info-input  required-credit" type="text" maxlength = "200" name = "buyer-name"></input>
					<label id = "buyer-surname-label" class = "desc-label localized" for = "buyer-surname" >Surame* : </label>
					<input id = "buyer-surname" class = "form-control info-input  required-credit" type="text" maxlength = "200" name = "buyer-surname"></input>
					<label id = "buyer-country-label" class = "desc-label localized" for = "buyer-country" >Country* : </label>
					<select id = "buyer-country" class = "form-control info-input required-credit" name = "buyer-country" required>

						<option value="Afghanistan">Afghanistan</option>
						<option value="Aland Islands">Aland Islands</option>
						<option value="Albania">Albania</option>
						<option value="Algeria">Algeria</option>
						<option value="American Samoa">American Samoa</option>
						<option value="Andorra">Andorra</option>
						<option value="Angola">Angola</option>
						<option value="Anguilla">Anguilla</option>
						<option value="Antarctica">Antarctica</option>
						<option value="Antigua and Barbuda">Antigua and Barbuda</option>
						<option value="Argentina">Argentina</option>
						<option value="Armenia">Armenia</option>
						<option value="Aruba">Aruba</option>
						<option value="Australia">Australia</option>
						<option value="Austria">Austria</option>
						<option value="Azerbaijan">Azerbaijan</option>
						<option value="Bahamas">Bahamas</option>
						<option value="Bahrain">Bahrain</option>
						<option value="Bangladesh">Bangladesh</option>
						<option value="Barbados">Barbados</option>
						<option value="Belarus">Belarus</option>
						<option value="Belgium">Belgium</option>
						<option value="Belize">Belize</option>
						<option value="Benin">Benin</option>
						<option value="Bermuda">Bermuda</option>
						<option value="Bhutan">Bhutan</option>
						<option value="Bolivia">Bolivia</option>
						<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
						<option value="Botswana">Botswana</option>
						<option value="Bouvet Island">Bouvet Island</option>
						<option value="Brazil">Brazil</option>
						<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
						<option value="Brunei Darussalam">Brunei Darussalam</option>
						<option value="Bulgaria">Bulgaria</option>
						<option value="Burkina Faso">Burkina Faso</option>
						<option value="Burundi">Burundi</option>
						<option value="Cambodia">Cambodia</option>
						<option value="Cameroon">Cameroon</option>
						<option value="Canada">Canada</option>
						<option value="Cape Verde">Cape Verde</option>
						<option value="Cayman Islands">Cayman Islands</option>
						<option value="Central African Republic">Central African Republic</option>
						<option value="Chad">Chad</option>
						<option value="Chile">Chile</option>
						<option value="China">China</option>
						<option value="Christmas Island">Christmas Island</option>
						<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
						<option value="Colombia">Colombia</option>
						<option value="Comoros">Comoros</option>
						<option value="Congo">Congo</option>
						<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
						<option value="Cook Islands">Cook Islands</option>
						<option value="Costa Rica">Costa Rica</option>
						<option value="Cote D'ivoire">Cote D'ivoire</option>
						<option value="Croatia">Croatia</option>
						<option value="Cuba">Cuba</option>
						<option value="Cyprus">Cyprus</option>
						<option value="Czech Republic">Czech Republic</option>
						<option value="Denmark">Denmark</option>
						<option value="Djibouti">Djibouti</option>
						<option value="Dominica">Dominica</option>
						<option value="Dominican Republic">Dominican Republic</option>
						<option value="Ecuador">Ecuador</option>
						<option value="Egypt">Egypt</option>
						<option value="El Salvador">El Salvador</option>
						<option value="Equatorial Guinea">Equatorial Guinea</option>
						<option value="Eritrea">Eritrea</option>
						<option value="Estonia">Estonia</option>
						<option value="Ethiopia">Ethiopia</option>
						<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
						<option value="Faroe Islands">Faroe Islands</option>
						<option value="Fiji">Fiji</option>
						<option value="Finland">Finland</option>
						<option value="France">France</option>
						<option value="French Guiana">French Guiana</option>
						<option value="French Polynesia">French Polynesia</option>
						<option value="French Southern Territories">French Southern Territories</option>
						<option value="Gabon">Gabon</option>
						<option value="Gambia">Gambia</option>
						<option value="Georgia">Georgia</option>
						<option value="Germany">Germany</option>
						<option value="Ghana">Ghana</option>
						<option value="Gibraltar">Gibraltar</option>
						<option value="Greece">Greece</option>
						<option value="Greenland">Greenland</option>
						<option value="Grenada">Grenada</option>
						<option value="Guadeloupe">Guadeloupe</option>
						<option value="Guam">Guam</option>
						<option value="Guatemala">Guatemala</option>
						<option value="Guernsey">Guernsey</option>
						<option value="Guinea">Guinea</option>
						<option value="Guinea-bissau">Guinea-bissau</option>
						<option value="Guyana">Guyana</option>
						<option value="Haiti">Haiti</option>
						<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
						<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
						<option value="Honduras">Honduras</option>
						<option value="Hong Kong">Hong Kong</option>
						<option value="Hungary">Hungary</option>
						<option value="Iceland">Iceland</option>
						<option value="India">India</option>
						<option value="Indonesia">Indonesia</option>
						<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
						<option value="Iraq">Iraq</option>
						<option value="Ireland">Ireland</option>
						<option value="Isle of Man">Isle of Man</option>
						<option value="Israel">Israel</option>
						<option value="Italy">Italy</option>
						<option value="Jamaica">Jamaica</option>
						<option value="Japan">Japan</option>
						<option value="Jersey">Jersey</option>
						<option value="Jordan">Jordan</option>
						<option value="Kazakhstan">Kaz370pxakhstan</option>
						<option value="Kenya">Kenya</option>
						<option value="Kiribati">Kiribati</option>
						<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
						<option value="Korea, Republic of">Korea, Republic of</option>
						<option value="Kuwait">Kuwait</option>
						<option value="Kyrgyzstan">Kyrgyzstan</option>
						<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
						<option value="Latvia">Latvia</option>
						<option value="Lebanon">Lebanon</option>
						<option value="Lesotho">Lesotho</option>
						<option value="Liberia">Liberia</option>
						<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
						<option value="Liechtenstein">Liechtenstein</option>
						<option value="Lithuania">Lithuania</option>
						<option value="Luxembourg">Luxembourg</option>
						<option value="Macao">Macao</option>
						<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic</option>
						<option value="Madagascar">Madagascar</option>
						<option value="Malawi">Malawi</option>
						<option value="Malaysia">Malaysia</option>
						<option value="Maldives">Maldives</option>
						<option value="Mali">Mali</option>
						<option value="Malta">Malta</option>
						<option value="Marshall Islands">Marshall Islands</option>
						<option value="Martinique">Martinique</option>
						<option value="Mauritania">Mauritania</option>
						<option value="Mauritius">Mauritius</option>
						<option value="Mayotte">Mayotte</option>
						<option value="Mexico">Mexico</option>
						<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
						<option value="Moldova, Republic of">Moldova, Republic of</option>
						<option value="Monaco">Monaco</option>
						<option value="Mongolia">Mongolia</option>
						<option value="Montenegro">Montenegro</option>
						<option value="Montserrat">Montserrat</option>
						<option value="Morocco">Morocco</option>
						<option value="Mozambique">Mozambique</option>
						<option value="Myanmar">Myanmar</option>
						<option value="Namibia">Namibia</option>
						<option value="Nauru">Nauru</option>
						<option value="Nepal">Nepal</option>
						<option value="Netherlands">Netherlands</option>
						<option value="Netherlands Antilles">Netherlands Antilles</option>
						<option value="New Caledonia">New Caledonia</option>
						<option value="New Zealand">New Zealand</option>
						<option value="Nicaragua">Nicaragua</option>
						<option value="Niger">Niger</option>
						<option value="Nigeria">Nigeria</option>
						<option value="Niue">Niue</option>
						<option value="Norfolk Island">Norfolk Island</option>
						<option value="Northern Mariana Islands">Northern Mariana Islands</option>
						<option value="Norway">Norway</option>
						<option value="Oman">Oman</option>
						<option value="Pakistan">Pakistan</option>
						<option value="Palau">Palau</option>
						<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
						<option value="Panama">Panama</option>
						<option value="Papua New Guinea">Papua New Guinea</option>
						<option value="Paraguay">Paraguay</option>
						<option value="Peru">Peru</option>
						<option value="Philippines">Philippines</option>
						<option value="Pitcairn">Pitcairn</option>
						<option value="Poland">Poland</option>
						<option value="Portugal">Portugal</option>
						<option value="Puerto Rico">Puerto Rico</option>
						<option value="Qatar">Qatar</option>
						<option value="Reunion">Reunion</option>
						<option value="Romania">Romania</option>
						<option value="Russian Federation">Russian Federation</option>
						<option value="Rwanda">Rwanda</option>
						<option value="Saint Helena">Saint Helena</option>
						<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
						<option value="Saint Lucia">Saint Lucia</option>
						<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
						<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
						<option value="Samoa">Samoa</option>
						<option value="San Marino">San Marino</option>
						<option value="Sao Tome and Principe">Sao Tome and Principe</option>
						<option value="Saudi Arabia">Saudi Arabia</option>
						<option value="Senegal">Senegal</option>
						<option value="Serbia">Serbia</option>
						<option value="Seychelles">Seychelles</option>
						<option value="Sierra Leone">Sierra Leone</option>
						<option value="Singapore">Singapore</option>
						<option value="Slovakia">Slovakia</option>
						<option value="Slovenia">Slovenia</option>
						<option value="Solomon Islands">Solomon Islands</option>
						<option value="Somalia">Somalia</option>
						<option value="South Africa">South Africa</option>
						<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
						<option value="Spain">Spain</option>
						<option value="Sri Lanka">Sri Lanka</option>
						<option value="Sudan">Sudan</option>
						<option value="Suriname">Suriname</option>
						<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
						<option value="Swaziland">Swaziland</option>
						<option value="Sweden">Sweden</option>
						<option value="Switzerland">Switzerland</option>
						<option value="Syrian Arab Republic">Syrian Arab Republic</option>
						<option value="Taiwan, Province of China">Taiwan, Province of China</option>
						<option value="Tajikistan">Tajikistan</option>
						<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
						<option value="Thailand">Thailand</option>
						<option value="Timor-leste">Timor-leste</option>
						<option value="Togo">Togo</option>
						<option value="Tokelau">Tokelau</option>
						<option value="Tonga">Tonga</option>
						<option value="Trinidad and Tobago">Trinidad and Tobago</option>
						<option value="Tunisia">Tunisia</option>
						<option value="Turkey">Turkey</option>
						<option value="Turkmenistan">Turkmenistan</option>
						<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
						<option value="Tuvalu">Tuvalu</option>
						<option value="Uganda">Uganda</option>
						<option value="Ukraine">Ukraine</option>
						<option value="United Arab Emirates">United Arab Emirates</option>
						<option value="United Kingdom">United Kingdom</option>
						<option value="United States">United States</option>
						<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
						<option value="Uruguay">Uruguay</option>
						<option value="Uzbekistan">Uzbekistan</option>
						<option value="Vanuatu">Vanuatu</option>
						<option value="Venezuela">Venezuela</option>
						<option value="Viet Nam">Viet Nam</option>
						<option value="Virgin Islands, British">Virgin Islands, British</option>
						<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
						<option value="Wallis and Futuna">Wallis and Futuna</option>
						<option value="Western Sahara">Western Sahara</option>
						<option value="Yemen">Yemen</option>
						<option value="Zambia">Zambia</option>
						<option value="Zimbabwe">Zimbabwe</option>
					</select>
					<label id = "buyer-city-label" class = "desc-label localized" for = "buyer-city" >City* : </label>
					<input id = "buyer-city" class = "form-control info-input  required-credit" type="text" maxlength = "200" name = "buyer-city"></input>
					<label id = "buyer-address-label" class = "desc-label localized" for = "buyer-address" >Address* : </label>
					<input id = "buyer-address" class = "form-control info-input  required-credit" type="text" maxlength = "200" name = "buyer-address"></input>
					<label id = "buyer-pcode-label" class = "desc-label localized" for = "buyer-pcode" >Post code* : </label>
					<input id = "buyer-pcode" class = "form-control info-input required-credit" type="text" maxlength = "200" name = "buyer-pcode"></input>
					<input type = "button" id = "pay-by-credit-card"  class = "btn btn-lg btn-default" value = "Pay With Credit Card"></input>
				</div>
			</div>
			<hr/>
					<input class = "btn btn-lg btn-primary" id = "to-check-form" type = 'button' style="position: relative" value = "Back"></input>


			</div>
		</div>
	</div>
	<input type="checkbox" id = "cc-or-paypal" name = 'select-method' value = '1' style = "display : none"></input>
	<input type="text" id = "language" name = 'language' value = 'en' style = "display : none"></input>
	<input type="text" id = "sum"  value = '0' style = "display : none"></input>
	<button type = "submit" id = "submit"></button>
</form>
	<div id = "check-info">
	<h2 id = "check-all" class = "localized" style = 'text-align:center'>Please, verify all your information!</h2>

		<table id = "check-table" rules='all' style="border-color:#666; width:50%" cellpadding='10'>
			<tr style='background:#eee'><td><strong class = "localized"  id = "man-name-check-label">Gentleman's name</strong> </td><td><h3 class = "check-label" id = "man-name-check"></h3></td></tr>
			<tr><td><strong class = "localized" id = "man-surname-check-label">Gentleman's surname</strong> </td><td><h3 class = "check-label" id = "man-surname-check"></td></tr>
			<tr style='background:#eee'><td><strong class = "localized" id = "man-bdate-check-label">Gentleman's birthday   </strong> </td><td><h3 class = "check-label" id = "man-bdate-check"></td></tr>
			<tr><td><strong class = "localized" id = "man-id-check-label">Gentleman's A ID</strong> </td><td><h3 class = "check-label" id = "man-id-check"></td></tr>
			<tr style='background:#eee'><td><strong class = "localized" id = "woman-name-check-label">Lady name</strong> </td><td><h3 class = "check-label" id = "woman-name-check"></td></tr>
			<tr><td><strong class = "localized" id = "woman-surname-check-label">Lady surname:</strong> </td><td><h3 class = "check-label" id = "woman-surname-check"></td></tr>
			<tr style='background:#eee'><td><strong class = "localized" id = "woman-bdate-check-label">Lady's birthday</strong> </td><td><h3 class = "check-label" id = "woman-bdate-check"></td></tr>
			<tr><td><strong class = "localized" id = "woman-id-check-label">Lady's A ID</strong> </td><td><h3 class = "check-label" id = "woman-id-check"></td></tr>
			<tr style='background:#eee'><td><strong class = "localized" id = "contact-country-check-label">Country</strong> </td><td><h3 class = "check-label" id = "contact-country-check"></td></tr>
			<tr><td><strong class = "localized" id = "contact-city-check-label">City</strong> </td><td><h3 class = "check-label" id = "contact-city-check"></td></tr>
			<tr style='background:#eee'><td><strong class = "localized" id = "contact-club-check-label">Club</strong> </td><td><h3 class = "check-label" id = "contact-club-check"></td></tr>
			<tr><td><strong  class = "localized" id = "contact-coach-check-label">Coach</strong> </td><td><h3 class = "check-label" id = "contact-coach-check"></td></tr>
			<tr style='background:#eee'><td><strong class = "localized" id = "contact-phone-check-label">Phone</strong> </td><td><h3 class = "check-label" id = "contact-phone-check"></td></tr>
			<tr><td><strong class = "localized" id = "contact-email-check-label">E-mail</strong> </td><td><h3 class = "check-label" id = "contact-email-check"></td></tr>
			<tr style='background:#eee'><td><strong class = "localized" id = "disciplines-check-label">Categories chosen</strong> </td><td><h3 class = "check-label" id = "disciplines-check"></td></tr>
		</table>

		
		<input type="button" id = "to-main-form" class="btn btn-primary btn-lg" value = "Back"></input>
		<input type="button" id = "to-checkout" class="btn btn-success btn-lg" value = "Continue"></input>
	</div>







</div>
        
<script>
var summ = 0;
var allVals = [];
var initialBorder;
var dictionary = {
	en:{
		'gentelman' : "Gentleman <span class = 'glyphicon glyphicon-chevron-down'>",
		'lady' : "Lady <span class = 'glyphicon glyphicon-chevron-down'>",
		'man-name-label' : "Name* : ",
		'man-surname-label' : "Surname* : ",
		'man-bdate-label' : "Date of Birth* : ",
		'man-id-label' : "A ID card* : ",
		'woman-name-label' : "Name* : ",
		'woman-surname-label' : "Surname* : ",
		'woman-bdate-label' : "Date of Birth* : ",
		'woman-id-label' : "A ID card* : ",
		'contact-country-label' : "Country* : ",
		'contact-city-label' : "City : ",
		'contact-club-label' : "Club : ",
		'contact-coach-label' : "Coach : ",
		'contact-phone-label' : "Phone : ",
		'contact-email-label' : "Email* : ",
		'man-name-check-label' : "Gentleman's name",
		'man-surname-check-label' : "Gentleman's surname",
		'man-bdate-check-label' : "Gentleman's Birthday",
		'man-id-check-label' : "Gentleman's WDSF ID card",
		'woman-name-check-label' : "Lady's name",
		'woman-surname-check-label' : "Lady's surname",
		'woman-bdate-check-label' : "Lady's Birthday",
		'woman-id-check-label' : "Lady's WDSF ID card",
		'contact-country-check-label' : "Country",
		'contact-city-check-label' : "City",
		'contact-club-check-label' : "Club",
		'contact-coach-check-label' : "Coach",
		'contact-phone-check-label' : "Phone",
		'contact-email-check-label' : "E-mail",
		'disciplines-check-label' : "Categories chosen",
		'contact-info' : "<span class = 'glyphicon glyphicon-chevron-down'></span> Contact Information",
		'fill-contacts' : "Additional information",
		'fill-details' : "Fill in all the form fields <b>ONLY</b> in latin letters",
		'day-one' : "Date 1",
		'day-two' : "Date 2",
		'day-three' : "Date 3",
		'select-cats' : "Select the categories, which you will participate in",
		'form-header' : "Registration form",
		'pbpp' : 'Pay with PayPal Account',
		'pbcc' : 'Pay with Credit Card',
		'buyer-name-label' : 'Name* : ',
		'buyer-surname-label' : 'Surname* : ',
		'buyer-city-label' : 'City* : ',
		'buyer-address-label' : 'Address* : ',
		'buyer-pcode-label' : 'Postal code* : ',
		'buyer-country-label' : 'Country* : ',
		'check-all' : 'Please, verify all your information!'
	},
	fi: {
		'gentelman' : "Mies <span class = 'glyphicon glyphicon-chevron-down'>",
		'lady' : "Nainen <span class = 'glyphicon glyphicon-chevron-down'>",
		'man-name-label' : "Nimi* : ",
		'man-surname-label' : "Sukunimi* : ",
		'man-bdate-label' : "Syntymäaika* : ",
		'man-id-label' : "A ID kortti:",
		'woman-name-label' : "Nimi* : ",
		'woman-surname-label' : "Sukunimi* : ",
		'woman-bdate-label' : "Syntymäaika* : ",
		'woman-id-label' : "A ID kortti:",
		'contact-country-label' : "Maa* : ",
		'contact-city-label' : "Kaupunki : ",
		'contact-club-label' : "Seura : ",
		'contact-coach-label' : "Valmentaja : ",
		'contact-phone-label' : "Puhelinnumero : ",
		'contact-email-label' : "Sähköposti* : ",
		'man-name-check-label' : "Miehen nimi",
		'man-surname-check-label' : "Miehen sukunimi",
		'man-bdate-check-label' : "Miehen syntymäaika",
		'man-id-check-label' : "Miehen WDSF ID kortti",
		'woman-name-check-label' : "Naisen nimi",
		'woman-surname-check-label' : "Naisen sukunimi",
		'woman-bdate-check-label' : "Naisen syntymäaika",
		'woman-id-check-label' : "Naisen WDSF ID kortti",
		'contact-country-check-label' : "Maa",
		'contact-city-check-label' : "Kaupunki",
		'contact-club-check-label' : "Seura",
		'contact-coach-check-label' : "Valmentaja",
		'contact-phone-check-label' : "Puhelinnumero",
		'contact-email-check-label' : "Sähköposti",
		'disciplines-check-label' : "Valitut luokat",
		'contact-info' : "<span class = 'glyphicon glyphicon-chevron-down'></span> Yhteystiedot",
		'fill-contacts' : "Lisätiedot",
		'fill-details' : "Täytä kaikki lomakkeen kentät <b>VAIN</b> Latinialaisella kirjaimilla",
		'day-one' : "Date 1",
		'day-two' : "Date 2",
		'day-three' : "Date 3",
		'select-cats' : "Valitkaa luokat, joihin aiotte osallistua",
		'form-header' : "Ilmoittautumislomake",
		'pbpp' : 'Maksa PayPalilla',
		'pbcc' : 'Maksa luottokortilla',
		'buyer-name-label' : 'Nimi* : ',
		'buyer-surname-label' : 'Sukunimi* : ',
		'buyer-city-label' : 'Kaupunki* : ',
		'buyer-address-label' : 'Osoite* : ',
		'buyer-pcode-label' : 'Posti numero* : ',
		'buyer-country-label' : 'Maa* : ',
		'check-all' : 'Tarkistakaa, että kaikki kohdat on täytetty oikein!'
	},
	ru: {
		'gentelman' : "Партнер <span class = 'glyphicon glyphicon-chevron-down'>",
		'lady' : "Партнерша <span class = 'glyphicon glyphicon-chevron-down'>",
		'man-name-label' : "Имя* : ",
		'man-surname-label' : "Фамилия* : ",
		'man-bdate-label' : "Дата рождения* : ",
		'man-id-label' : "A ID карта* : ",
		'woman-name-label' : "Имя* : ",
		'woman-surname-label' : "Фамилия* : ",
		'woman-bdate-label' : "Дата рождения* : ",
		'woman-id-label' : "A ID карта* : ",
		'contact-country-label' : "Страна* : ",
		'contact-city-label' : "Город : ",
		'contact-club-label' : "Клуб : ",
		'contact-coach-label' : "Тренер : ",
		'contact-phone-label' : "Телефон : ",
		'contact-email-label' : "E-mail* : ",
		'man-name-check-label' : "Имя партнера",
		'man-surname-check-label' : "Фамилия партнера",
		'man-bdate-check-label' : "Дата рождения партнера",
		'man-id-check-label' : "WDSF ID карта партнера",
		'woman-name-check-label' : "Имя партнерши",
		'woman-surname-check-label' : "Фамилия партнерши",
		'woman-bdate-check-label' : "Дата рождения партнерши",
		'woman-id-check-label' : "WDSF ID карта партнерши",
		'contact-country-check-label' : "Страна",
		'contact-city-check-label' : "Город",
		'contact-club-check-label' : "Клуб",
		'contact-coach-check-label' : "Тренер",
		'contact-phone-check-label' : "Телефон",
		'contact-email-check-label' : "Email",
		'disciplines-check-label' : "Выбранные дисциплины",
		'contact-info' : "<span class = 'glyphicon glyphicon-chevron-down'></span> Контактные данные",
		'fill-contacts' : "Дополнительная информация",
		'fill-details' : "Заполните все поля формы <b>ТОЛЬКО</b> латиницей",
		'day-one' : "6 Марта 2015",
		'day-two' : "7 Марта 2015",
		'day-three' : "8 Марта 2015",
		'select-cats' : "Выберите категории, в которых вы будете принимать участие.",
		'form-header' : "РЕГИСТРАЦИЯ НА ТУРНИР",
		'pbpp' : 'Оплатить с PayPal аккаунта',
		'pbcc' : 'Оплатить с кредитной карты',
		'buyer-name-label' : 'Имя* : ',
		'buyer-surname-label' : 'Фамилия* : ',
		'buyer-city-label' : 'Город* : ',
		'buyer-address-label' : 'Адрес* : ',
		'buyer-pcode-label' : 'Почтовый индекс* : ',
		'buyer-country-label' : 'Страна* : ',
		'check-all' : 'Проверьте, пожалуйста, что все данные заполнены верно!'
	}
};
/*$("#show-first-day-cats").click(function(){
	$('#first-day-cats').slideToggle(400);
});
$("#show-second-day-cats").click(function(){
	$('#second-day-cats').slideToggle(400);
});
$("#show-third-day-cats").click(function(){
	$('#third-day-cats').slideToggle(400);
});*/
/*$(".step-header").click(function(){
	if($("#slide").prop("checked")){
		var toToggle = $(this).next(".step");
		toToggle.slideToggle("slow");
	}
});*/
$(document).ready(function(){
	$('[type=checkbox]:checked').each(function() {
		if($(this).attr('id') != 'cc-or-paypal'){
			summ += parseInt($(this).val());
		}

	});
	if($("#language").val() == "fi"){
		$("#total-price").val("Summa : " + summ + " €");
	}
	if($("#language").val() == "en"){
		$("#total-price").val("Sum : " + summ + " €");
	}
	if($("#language").val() == "ru"){
		$("#total-price").val("Сумма : " + summ + " €");
	}
	$("#sum").val(summ);
	$('#man-bdate').datetimepicker({
		timepicker:false,
		format:'d.m.Y'
	});
	$('#woman-bdate').datetimepicker({
		timepicker:false,
		format:'d.m.Y'
	});
});
$(".checkbox-inline").click(function(){
	if($(this).prop("checked")){
		summ += parseInt($(this).val());

	}else{
		summ -= parseInt($(this).val());

	}
	$("#sum").val(summ);
	if($("#language").val() == "fi"){
		$("#total-price").val("Summa : " + summ + " €");
	}
	if($("#language").val() == "en"){
		$("#total-price").val("Sum : " + summ + " €");
	}
	if($("#language").val() == "ru"){
		$("#total-price").val("Сумма : " + summ + " €");
	}
});

function check_for_data_in_wdsf(wdsf_checked){
	if(wdsf_checked){
		if(($("#man-id").val() != '') && ($("#woman-id").val() != '')){return true;}else{return false;}
	}else{return true;}
}

$("#check").click(function(){
	var allValsToPrint = [];

	allVals = [];
	var at_least_one_selected = false;
	var first = true;
	var counter = 0;
	var hasWdsf = false;

	$('[type=checkbox]:checked').each(function() {
		if($(this).attr('id') != 'cc-or-paypal'){
			var temp = $(this).parent().text();
			var temp1 = temp.replace(/ /g , "_");
			var temp2 = temp1.slice(3, temp1.length);
			at_least_one_selected = true;
			if($(this).attr('data-index') == 'a'){
				hasWdsf = true;		
			}
			allVals.push(temp1);
			allValsToPrint.push($(this).parent().text() + "<br>");
		}
	});
	(function(){
		if(hasWdsf){
			$('#man-id,#woman-id').addClass('required');	
		}
	}());
	$('.required').each(function(){
		if($(this).val() != ''){
			counter++;		
		}else{
			initialBorder = $(this).css('border');
			$(this).css('border' , '2px solid red');		
		}	
	});
	var has_wdsf_data = check_for_data_in_wdsf(hasWdsf);
		if((counter >= 8) && at_least_one_selected && has_wdsf_data){
			$('.check-label').each(function(){
				var elem_id = $(this).attr('id');
				elem_id = elem_id.substring(0,elem_id.length-6);
				var old_elem = "#" + elem_id;
				var text = $(old_elem).val();
				$(this).html(text);					
			});
			$('#disciplines-check').html(allValsToPrint);
			$('.form-header').fadeOut();
			$("#main-form").fadeOut().delay(400);
			$("#check-info").fadeIn();
			$("html, body").delay(500).animate({ scrollTop: 0 }, "slow");
		}else{
			if(!at_least_one_selected){
				alert("Select at least one service!");
			}		
		}
});

$('input').bind('keypress', function (event) {
    var regex = new RegExp("^[a-zA-Z0-9@.,+_ -]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
       event.preventDefault();
       return false;
    }
});
$(document.body).on('click','.required,.required-credit',function(){

		$(this).css('border', '1px solid #CCC');
	
});
$('input[type=checkbox]').click(function (event) {
    var value = $(this).val();
});

$("#to-main-form").click(function(){
	$("#check-info").fadeOut().delay(400);
	$('.form-header').fadeIn();
	$("#main-form").fadeIn();

});

$("#to-checkout").click(function(){
	$("#check-info").fadeOut().delay(400);
	$("#payment").fadeIn();
});
$("#pay-by-paypal").click(function(){
	$('#cc-or-paypal').prop('checked', true);
	$("#reg-form").attr('action','xprs.php');
	$('#submit').trigger('click');
});
$("#pay-by-credit-card").click(function(){
	var counter = 0;
	$('#cc-or-paypal').prop('checked', false);
	$("#reg-form").attr('action','ckout.php');
	$('.required-credit').each(function(){
		if($(this).val() != ''){
			counter++;		
		}else{
			initialBorder = $(this).css('border');
			$(this).css('border' , '2px solid red');		
		}	
	});
	if(counter == 6 ){
		$('#submit').trigger('click');
	}
});
$('#to-check-form').click(function(){
	$("#payment").fadeOut().delay(400);
	$("#check-info").fadeIn();
});
function change_lang(lang){
	$('.localized').each(function(){
		var elem_id = $(this).attr('id');
		$(this).html(dictionary[lang][elem_id]);
	});
	if(lang == "fi"){
		$('#contact-info').css('width','410px');	
		$('#check, #to-checkout').val('Seuraava');
		$("#to-main-form, #to-check-form").val('Takaisin');
		$("#pay-by-paypal").val("Maksa PayPalilla");
		$("#pay-by-credit-card").val("Maksa luottokortilla");
		$("#man-id,#woman-id").attr('placeholder', 'obligatory only for A-type services');
		$("#total-price").val('Summa : ' + $("#sum").val() + " €");
		$("#ccform").css('width','480px');
		$("#language").val('fi');
	}
	if(lang == "en"){
		$('#contact-info').css('width','300px');	
		$('#check, #to-checkout').val('Continue');
		$("#to-main-form, #to-check-form").val('Back');
		$("#pay-by-paypal").val("Pay with PayPal");
		$("#pay-by-credit-card").val("Pay with Credit Card");
		$("#man-id,#woman-id").attr('placeholder', 'obligatory only for A-type services');
		$("#total-price").val('Sum : ' + $("#sum").val() + " €");
		$("#ccform").css('width','480px');
		$("#language").val('en');
	}
	if(lang == "ru"){
		$('#check, #to-checkout').val('Далее');
		$('#contact-info').css('width','300px');		
		$("#to-main-form, #to-check-form").val('Назад');
		$("#pay-by-paypal").val("Оплатить с PayPal");
		$("#pay-by-credit-card").val("Оплатить с кредитной карты");
		$("#man-id,#woman-id").attr('placeholder', 'только для услуг типа A');
		$("#total-price").val('Сумма : ' + $("#sum").val() + " €");
		$("#ccform").css('width','520px');
		$("#language").val('ru');
	}
	
}
	

</script>
</body>
</html>
