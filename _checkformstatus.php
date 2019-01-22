<?php 
	include "config.php";

	$f = $_POST['fid'];   
	$u = $_POST['uid']; 
	$dt = date("d");
	$mn = date("m");
	$ye =date("Y");
	$ts = time();
	$sh = shift();
	
	$form_data = array();	
	$form_data['success'] = false;
	$form_data['msg']  = '';

	$sql = "SELECT * FROM checkdata WHERE f_id='".$f."' and date='".$dt."' and month='".$mn."' and year='".$ye."' and shift='".$sh."'";

	if ($result=mysqli_query($conn,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		
		if($rowcount > 0){
			$form_data['success'] = true;
			$form_data['msg']  = 'Form Already Submitted For Forklift-'.$f.' for this Shift';
		}
		else
		{
			$form_data['success'] = false;
			$form_data['msg']  = 'Form not Submitted for this shift';
		}
	}
	
	echo json_encode($form_data);

	mysqli_close($conn);
?>