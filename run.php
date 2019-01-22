<?php 
	include 'config.php';
	include 'email.php';

	$sh = shift();
	$dt = date("d");
	$mn = date("m");
	$ye =date("Y"); 
	
	$arr = array();
	
	_getAllForkliftsIds();
	
	_loopAllForkLifts();
	
	/*	Function to loop through all the forklifts so as check if entry was made in the DB or not
	*/
	function _loopAllForkLifts(){
		global $arr;
		foreach ($arr as &$value) 
		{
			_check4hourStatus($value);
		}
	}
	
	/* Function to check four hour status for each forklift 
	*/
	function _check4hourStatus($fid){
		global $conn, $sh, $dt, $mn, $ye;
		
		$sql = "SELECT * FROM checkdata WHERE f_id='".$fid."' and date='".$dt."' and month='".$mn."' and year='".$ye."' and shift='".$sh."'";
		
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) == 0)
		{
			_send4HourEmail($fid);
		}
	}
	
	/*	Function to send email using Email class
	*/
	function _send4HourEmail($fid){
		global $sh, $dt, $mn, $ye, $email;
		$u = 'Unknown';//_getUserNameForRun($fid);
		$f = _getForkliftNameForRun($fid);
		
		$email->shift4HourFailEmail($f, $u, $sh, $dt, $mn, $ye);
	}
	

	

	

	

?>	