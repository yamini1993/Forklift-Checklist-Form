<?php 
	include 'config.php';
	
	$f = $_POST['fid'];
	$t = $_POST['tn'];
	$dt = date("d");
	$mn = date("m");
	$ye = date("Y");
	$d = time();
	$sh = shift();
	
	$arr = array();
	$errors = array(); //To store errors
	$form_data = array(); //Pass back the data to 
	
	checkPreviousShift();
	
	$sql = "SELECT * FROM checkdata WHERE f_id='".$f."' and date = '".$arr['dt']."' and month = '".$arr['mn']."' and year = '".$arr['ye']."' and ".$t." = '0' and shift = '".$arr['psh']."'";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result) == 0) 
	{
		$form_data['success'] = false;
		$form_data['msg'] = "Issue Not Submitted for this check.";		
	} 
	else 
	{
		$form_data['success'] = true;
		$form_data['msg'] = "Issue Already Submitted for this Problem.";
	}		

	echo json_encode($form_data);

	mysqli_close($conn);
	
?> 