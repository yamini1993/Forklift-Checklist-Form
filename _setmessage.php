<?php 
	include 'config.php';
	include 'email.php';

	$f = $_POST['forklift'];
	$u = $_POST['opername']; 
	$t = $_POST['typename'];
	$dt = date("d");
	$mn = date("m");
	$ye =date("Y");
	$d = time();
	$sh = shift();
	$s = $_POST['subject'];
	$m = $_POST['message'];

	$errors = array(); //To store errors
	$form_data = array(); //Pass back the data to `form.php`

	if(empty($_POST['forklift'])){
		$errors['forklift'] = 'Please Select Forklift';
	}
	if(empty($_POST['opername'])){
		$errors['opername'] = 'Please Select Name';
	}
	if (empty($_POST['subject'])) { 
		$errors['subject'] = 'Subject cannot be blank';
	}
	else {
		$s = mysqli_real_escape_string($conn, $_POST['subject']); 
	}
	
	if (empty($_POST['message'])) { 
		$errors['message'] = 'Message cannot be blank';
	}
	else {
		$m = mysqli_real_escape_string($conn, $_POST['message']); 
	}
		
	if (!empty($errors)) { 
		//If errors in validation
		$form_data['success'] = false;
		$form_data['errors']  = $errors;
	}
	else { 
		//If not, process the form, and return true on success
		
		$sql = "INSERT INTO messages (f_id, u_id, type, date, month, year, shift, ts, message, subject) VALUES ('".$f."', '".$u."', '".$t."', '".$dt."', '".$mn."', '".$ye."', '".$sh."', '".$d."','".$m."','".$s."')";
	
		if (mysqli_query($conn, $sql)) {
			$form_data['success'] = true;
			$form_data['msg'] = 'Form was submitted Successfully';
			$email->problemEmail(_getForkliftName($f),_getUserName($u),$dt,$mn,$ye,$sh,$s,$m);
		} else {
			$form_data['success'] = false;
			$form_data['msg'] = 'Error Found: '. mysqli_error($conn);
		}		
		
	}

	//Return the data back to form.php
	echo json_encode($form_data);

	mysqli_close($conn);
	
?> 