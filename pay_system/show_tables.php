
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



<?php


	$login_data = $_POST;
	$script = "";
	require("helper.php");
	if(($login_data['login'] == $admin_config['login']) && ($login_data['password'] == $admin_config['password'])){
	
		
		echo "<div class = 'row'>";
	
		echo "<div class = 'col-lg-6' style = 'left:2%;'>";
		//$tables = array();
		$i = 1;
		//$j = 0;
		$nav = "";	
		$nav .= "<ul style = 'position:fixed;left:60%;top:0;font-size:16px;'>";
		foreach($validationArray as $key=>$val){
			$all_needed_records = get_all("discipline", $key,false);
			//$tables[$key] = array();
			$table = "";
			$nav .= "<li><a href = '#h".$key."'>".$key."</a></li>";
			$table .= "<hr>";
			$table .= "<h1 id = 'h".$key."'>$key</h1>";
			$table .= "<input id = 'export".$key."' type = 'button' class = 'btn btn-sm btn-danger' value = 'Export' style = 'margin : 10px;'></input>";
			$table .= "<table rules='all' style='border-color: #CC6666;' cellpadding='10'>";
			$table .= "<tr>";
			$table .= "<td>";

			$table .= "</td>";
			$table .= "<td>";
			$table .= "Man name";
			$table .= "</td>";
			$table .= "<td>";
			$table .= "Man surname";
			$table .= "</td>";
			$table .= "<td>";
			$table .= "Man ID";
			$table .= "</td>";
			$table .= "<td>";
			$table .= "Woman name";
			$table .= "</td>";
			$table .= "<td>";
			$table .= "Woman surname";
			$table .= "</td>";
			$table .= "<td>";
			$table .= "Woman ID";
			$table .= "</td>";
			$table .= "<td>";
			$table .= "Country";
			$table .= "</td>";
			$table .= "</tr>";
			
			foreach($all_needed_records as $record){
				$confirmed_status = $record['confirmed'];
				if($confirmed_status != "0"){
					if(($confirmed_status == "3") || ($confirmed_status == "101") || ($confirmed_status == "102") || ($confirmed_status == "103") || ($confirmed_status == "104") || ($confirmed_status == "110")){
							$table .= "<tr style = 'background:#CC66FF;'>";
							
					}else{
							$table .= "<tr style = 'background:#99CC33;'>";
							
					}
					$record_id = $record['id'];
					//$tables[$key][$i] = $record;
					$table .= "<td>";
					$table .= $i;
					$table .= "</td>";
					$table .= "<td>";
					$table .= "<h4 id = 'man_name".$record_id."'>".$record['man_name']."</h4>";
					$table .= "</td>";
					$table .= "<td>";
					$table .= "<h4 id = 'man_surname".$record_id."'>".$record['man_surname']."</h4>";
					$table .= "</td>";
					$table .= "<td>";
					$table .= "<h4 id = 'man_id".$record_id."'>".$record['man_id']."</h4>";
					$table .= "</td>";
					$table .= "<td>";
					$table .= "<h4 id = 'woman_name".$record_id."'>".$record['woman_name']."</h4>";
					$table .= "</td>";
					$table .= "<td>";
					$table .= "<h4 id = 'woman_surname".$record_id."'>".$record['woman_surname']."</h4>";
					$table .= "</td>";
					$table .= "<td>";
					$table .= "<h4 id = 'woman_id".$record_id."'>".$record['woman_id']."</h4>";
					$table .= "</td>";
					$table .= "<td>";
					$table .= "<h4 id = 'country".$record_id."'>".$record['country']."</h4>";
					$table .= "</td>";
					$table .= "<td>";
					$table .= "<input id = 'edit".$record_id."' type = 'button' value = 'Edit' class = 'btn btn-sm btn-primary'></input>";
					$table .= "</td>";
					$table .= "</tr>";
					++$i;
					$script .= "<script>";
					$script .= "$(document.body).on('click', '#edit".$record_id."', function(){
										$('#man_name".$record_id."').replaceWith('<input id = \"new_man_name".$record_id."\" class = \"form-control\" type=\"text\" value = \"".$record['man_name']."\"></input>');
										$('#man_surname".$record_id."').replaceWith('<input id = \"new_man_surname".$record_id."\" class = \"form-control\" type=\"text\" value = \"".$record['man_surname']."\"></input>');
										$('#man_id".$record_id."').replaceWith('<input id = \"new_man_id".$record_id."\" class = \"form-control\" type=\"text\" value = \"".$record['man_id']."\"></input>');
										$('#woman_name".$record_id."').replaceWith('<input id = \"new_woman_name".$record_id."\" class = \"form-control\" type=\"text\" value = \"".$record['woman_name']."\"></input>');
										$('#woman_surname".$record_id."').replaceWith('<input id = \"new_woman_surname".$record_id."\" class = \"form-control\" type=\"text\" value = \"".$record['woman_surname']."\"></input>');
										$('#woman_id".$record_id."').replaceWith('<input id = \"new_woman_id".$record_id."\" class = \"form-control\" type=\"text\" value = \"".$record['woman_id']."\"></input>');
										$('#country".$record_id."').replaceWith('<input id = \"new_country".$record_id."\" class = \"form-control\" type=\"text\" value = \"".$record['country']."\"></input>');
										$('#edit".$record_id."').replaceWith('<input id = \"save".$record_id."\" class = \"btn btn-sm btn-primary\" type=\"button\" value = \"Save\"></input>');
						
					});";
					$script .= "$(document.body).on('click', '#save".$record_id."', function(){
										var new_man_name = $('#new_man_name".$record_id."').val();
										var new_man_surname = $('#new_man_surname".$record_id."').val();
										var new_man_id = $('#new_man_id".$record_id."').val();
										var new_woman_name = $('#new_woman_name".$record_id."').val();
										var new_woman_surname = $('#new_woman_surname".$record_id."').val();
										var new_woman_id = $('#new_woman_id".$record_id."').val();
										var new_country = $('#new_country".$record_id."').val();
										$.ajax({
											url : 'update_one.php',
											type: 'POST',
                           								async: false,
                            								data: {
												'id' : ".$record_id.",
												'new_man_name' : new_man_name,
												'new_man_surname' : new_man_surname,
												'new_man_id' : new_man_id,
												'new_woman_name' : new_woman_name,
												'new_woman_surname' : new_woman_surname,
												'new_woman_id' : new_woman_id,
												'new_country' : new_country
											},
                            								success: function(data, textStatus) {
												alert('Success');
												$('#new_man_name".$record_id."').replaceWith('<h4 id = \"man_name".$record_id."\">'+new_man_name+'</h4>');
												$('#new_man_surname".$record_id."').replaceWith('<h4 id = \"man_surname".$record_id."\">'+new_man_surname+'</h4>');
												$('#new_man_id".$record_id."').replaceWith('<h4 id = \"man_id".$record_id."\">'+new_man_id+'</h4>');
												$('#new_woman_name".$record_id."').replaceWith('<h4 id = \"woman_name".$record_id."\">'+new_woman_name+'</h4>');	
												$('#new_woman_surname".$record_id."').replaceWith('<h4 id = \"woman_surname".$record_id."\">'+new_woman_surname+'</h4>');	
												$('#new_woman_id".$record_id."').replaceWith('<h4 id = \"woman_id".$record_id."\">'+new_woman_id+'</h4>');
												$('#new_country".$record_id."').replaceWith('<h4 id = \"country".$record_id."\">'+new_country+'</h4>');
												$('#save".$record_id."').replaceWith('<input id = \"edit".$record_id."\" class = \"btn btn-sm btn-primary\" type=\"button\" value = \"Edit\"></input>');

                            								}
										});
						
					});";
				}
					$script .= "</script>";
			}
					$script .= "<script>";
					$script .= "$(document.body).on('click', '#export".$key."', function(){
						window.location.replace('http://yoursite.com/export_one.php?table=".$key."');	
					});";
					$script .= "</script>";
			$i =1;
			$table .= "</table>";
			$table .= "<hr>";
			$table .= "<br>";
			$table .= "<br>";
			echo $table;
		}
		$nav .= "</ul>";
		echo "</div>";
		echo "<div class = 'col-lg-3'>";
		echo $nav;
		echo "</div>";
		echo "</div>";		
		echo $script;
	}else{
		echo "Wrong login credentials!!";
		exit;
	}

?>
</body>
</html>

