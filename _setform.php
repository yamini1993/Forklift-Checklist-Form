<?php 
	include 'config.php';
	//include 'email.php';
	
	$f = $_POST['sel_forklift'];
	$u = $_POST['sel_user'];
	$dt = date("d");
	$mn = date("m");
	$ye =date("Y");
	$ts = time();
	$sh = shift();
	
	$form_data = array();
	$form_data['success'] = true;
	$form_data['type']  = '';
	
	$tires = $_POST['tires'];
	$fluids = $_POST['fluids'];
	$structure = $_POST['structure'];
	$forks = $_POST['forks'];
	$mast = $_POST['mast'];
	$battery = $_POST['battery'];
	$gof = $_POST['gof'];
	$eb = $_POST['eb'];
	$controls1 = $_POST['controls1'];
	$controls2 = $_POST['controls2'];
	$capacity = $_POST['capacity'];
	$horn = $_POST['horn'];
	$lights = $_POST['lights'];
	$steering = $_POST['steering'];
	$brakes = $_POST['brakes'];
	$pedal = $_POST['pedal'];
	$power = $_POST['power'];
	$hydraulics = $_POST['hydraulics'];
	$guards = $_POST['guards'];
	$attachments = $_POST['attachments']; 
	
	if($tires == 0){
		checkRadio($conn, $f, $u, 'tires', $dt, $mn, $ye, $sh);		
	}
	if($fluids == 0 and $form_data['success']){
		checkRadio($conn, $f, $u, 'fluids', $dt, $mn, $ye, $sh);		
	}
	if($structure == 0 and $form_data['success']){
		checkRadio($conn, $f, $u, 'structure', $dt, $mn, $ye, $sh);		
	}
	if($forks == 0 and $form_data['success']){
		checkRadio($conn, $f, $u, 'forks', $dt, $mn, $ye, $sh);		
	}
	if($mast == 0 and $form_data['success']){
		checkRadio($conn, $f, $u, 'mast', $dt, $mn, $ye, $sh);		
	}
	if($battery == 0 and $form_data['success']){
		checkRadio($conn, $f, $u, 'battery', $dt, $mn, $ye, $sh);		
	}
	if($gof == 0 and $form_data['success']){
		checkRadio($conn, $f, $u, 'gof', $dt, $mn, $ye, $sh);		
	}
	if($eb == 0 and $form_data['success']){
		checkRadio($conn, $f, $u, 'eb', $dt, $mn, $ye, $sh);		
	}
	if($controls1 == 0 and $form_data['success']){
		checkRadio($conn, $f, $u, 'controls1', $dt, $mn, $ye, $sh);		
	}
	if($controls2 == 0 and $form_data['success']){
		checkRadio($conn, $f, $u, 'controls2', $dt, $mn, $ye, $sh);		
	}
	if($capacity == 0 and $form_data['success']){
		checkRadio($conn, $f, $u, 'capacity', $dt, $mn, $ye, $sh);		
	}
	if($horn == 0 and $form_data['success']){
		checkRadio($conn, $f, $u, 'horn', $dt, $mn, $ye, $sh);		
	}
	if($lights == 0 and $form_data['success']){
		checkRadio($conn, $f, $u, 'lights', $dt, $mn, $ye, $sh);		
	}
	if($steering == 0 and $form_data['success']){
		checkRadio($conn, $f, $u, 'steering', $dt, $mn, $ye, $sh);		
	}
	if($brakes == 0 and $form_data['success']){
		checkRadio($conn, $f, $u, 'brakes', $dt, $mn, $ye, $sh);		
	}
	if($pedal == 0 and $form_data['success']){
		checkRadio($conn, $f, $u, 'pedal', $dt, $mn, $ye, $sh);		
	}
	if($power == 0 and $form_data['success']){
		checkRadio($conn, $f, $u, 'power', $dt, $mn, $ye, $sh);		
	}
	if($hydraulics == 0 and $form_data['success']){
		checkRadio($conn, $f, $u, 'hydraulics', $dt, $mn, $ye, $sh);		
	}
	if($guards == 0 and $form_data['success']){
		checkRadio($conn, $f, $u, 'guards', $dt, $mn, $ye, $sh);		
	}
	if($attachments == 0 and $form_data['success']){
		checkRadio($conn, $f, $u, 'attachments', $dt, $mn, $ye, $sh);		
	}
	
	if($form_data['success']){
		
		$sql = "INSERT INTO checkdata (f_id, u_id, date, month, year, shift, ts, tires, fluids, structure, forks, mast, battery, gof, eb, controls1, controls2, capacity, horn, lights, steering, brakes, pedal, power, hydraulics, guards, attachments) VALUES ('".$f."', '".$u."', '".$dt."', '".$mn."', '".$ye."', '".$sh."', '".$ts."', '".$tires."', '".$fluids."', '".$structure."', '".$forks."', '".$mast."', '".$battery."', '".$gof."', '".$eb."', '".$controls1."', '".$controls2."', '".$capacity."', '".$horn."', '".$lights."', '".$steering."', '".$brakes."', '".$pedal."', '".$power."', '".$hydraulics."', '".$guards."', '".$attachments."')";
		
		if (mysqli_query($conn, $sql)) {
			$form_data['msg'] = "New record created successfully";
		} else {
			$form_data['msg'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		
	}
	
	echo json_encode($form_data);
	
	mysqli_close($conn);
?>