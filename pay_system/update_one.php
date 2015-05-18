<?php
	
	require("helper.php");


	$new_data = $_POST;


	$sql = "UPDATE customers SET man_name='".$new_data['new_man_name']."',man_surname='".$new_data['new_man_surname']."',man_id='".$new_data['new_man_id']."',woman_name='".$new_data['new_woman_name']."',woman_surname='".$new_data['new_woman_surname']."',woman_id='".$new_data['new_woman_id']."',country='".$new_data['new_country']."' WHERE id='".$new_data['id']."'";
		
		
	if (do_db_operation($sql)) {	
	   		echo "Success"; 
	}else {
		print_error(false,"Problems with database");
	}
	
?>
