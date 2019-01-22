<?php 

	//include "config.php";
	
	
	/*	Function to get forklift name using id
	*/
	function _getForkliftName($f){
		global $conn;
		$sql = 'SELECT name FROM forklift WHERE f_id = "'.$f.'"';

		$result = mysqli_query($conn,$sql);

		$users_arr = array();

		$row = mysqli_fetch_array($result); 
			
		return $row['name'];
	}
	
	/*	Function to get driver name using id
	*/
	function _getUserName($u){
		global $conn;
		$sql = "SELECT name FROM users WHERE u_id='".$u."'";

		$result = mysqli_query($conn,$sql);

		$users_arr = array();

		$row = mysqli_fetch_array($result); 
			
		return $row['name'];		
	}
		
	/*	Function to get all Forklifts with id and name
	*/
	function getForkLifts(){
		global $conn;
		
		$option = '';
		
		$sql = "SELECT f_id, name FROM forklift";

		$result = mysqli_query($conn,$sql);

		$users_arr = array();

		while($row = mysqli_fetch_array($result))
		{
			$option .= '<option value="'.$row["f_id"].'" >'.$row["name"].'</option>';
		}			
			
		return $option;
	}

	/*	Function to get all Users with id and name
	*/
	function getUsersSelect(){
		global $conn;
		
		$option = '';
		
		$sql = "SELECT u_id, name FROM users";

		$result = mysqli_query($conn,$sql);

		$users_arr = array();

		while($row = mysqli_fetch_array($result))
		{
			$option .= '<option value="'.$row["u_id"].'" >'.$row["name"].'</option>';
		}			
			
		return $option;
	}
	
	/*	Function to calculate shift
	*/
	function shift(){
		$h = (int)date("H");
		
		if( $h >= 0 and $h <= 7 ){ $sh = 3; }
		else 
		if( $h >= 8 and $h <= 15 ){ $sh = 1; }
		else 
		if( $h >= 16 and $h <= 23 ){ $sh = 2; }
		
		return $sh;
	}
	
	/*	Function to find leap year to be used in _checkpreviousshiftno
	*/
	function findLeapYear($year){
			
		//multiple conditions to check the leap year
		if( (0 == $year % 4) and (0 != $year % 100) or (0 == $year % 400) )
		{
			return 29;
		}
		else
		{
			return 28;
		}
	 
	}

	/*	Function to get previous Shift data including date, month, year and Shift
	*/
	function checkPreviousShift(){
		global $arr, $sh, $dt, $mn, $ye, $f, $t;
		
		if($sh == 3)
		{
			$previous_shift = 2;
		}
		else if($sh == 2)
		{
			$previous_shift = 1;
		}
		else if($sh == 1)
		{
			$previous_shift = 3;		
			
			if( $dt == 1)
			{
				//If Month is Jan and date is 1 with shift 1 we need to find data for shift 3 for 31 Dec
				if( $mn == 1 )
				{
					$dt = 32;
					$mn = 12;
					$ye = $ye - 1;
				}
				//If Month is Feb, April, June, Sep, Nov and date is 1 with shift 1 we need to find data for shift 3 for 31 date of previous month
				else if( $mn == 2 || $mn == 4 || $mn == 6 || $mn == 9 || $mn == 11 )
				{
					$dt = 32;
					$mn = $mn -1;
				}
				// IF Month is March and date is 1 with shift 1 we need to find data for shift 3 for 29/28 Feb
				else if( $mn == 3 )
				{
					$dt = findLeapYear($ye)+1;
					$mn = 2;			
				}
				//If Month is May, July, Aug, Oct, Dec and date is 1 with shift 1 we need to find data for shift 3 for 30 date of previous month
				else if( $mn == 5 || $mn == 7 || $mn == 8 || $mn == 10 || $mn == 12 )
				{
					$dt = 31;
					$mn = $mn - 1;
				}
			}			
		}
		$arr['dt']=$dt-1;
		$arr['mn']=$mn;
		$arr['ye']=$ye;
		$arr['psh']=$previous_shift;
	}
	
	/*  Function to check if radio is 0 then if has a corresponding message in the message
		table. If No message then show pop up to send the message in front end
	*/
	function checkRadio($conn, $f, $u, $t, $dt, $mn, $ye, $sh){
		
		global $form_data, $arr;
		
		/*Check if this type is no for previous shift, if no for previous shift then user does not needs to submit the issue for this type again. so no pop up modal should be shown to user to fill up the form. hence return true and exit this function if issue previous submitted for this type no button click.*/
		checkPreviousShift();
		
		$sql = "SELECT * FROM checkdata WHERE f_id='".$f."' and date = '".$arr['dt']."' and month = '".$arr['mn']."' and year = '".$arr['ye']."' and ".$t." = '0' and shift = '".$arr['psh']."'";
		
		
		$result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) != 0) 
		{
			$form_data['success'] = true;			
		}
		else
		{
			
			$sql = "SELECT * FROM `messages` WHERE f_id = '".$f."' and type = '".$t."' and date = '".$dt."' and month = '".$mn."' and  year = '".$ye."' and shift = '".$sh."' " ;		
			$result = mysqli_query($conn, $sql);
			
			if(mysqli_num_rows($result) == 0) 
			{
				$form_data['success'] = false;
				$form_data['type']  = $t;
			}
		}
	}
		
	/*	Function to check data if null and if not integer 
		Since all the radio buttons have value 0, 1, 2
	*/
	function check($data){
		if($data == '' || $data==null || empty($data) )
		{
			return false;
		}
		if( $data != 0 || $data != 1 || $data != 2 )
		{
			return false;
		}
		return $data;
	}
	
	
	
	/*RUN FUNCTION*/
	
	/*	Function to get All ForkLift id (f_id)
	*/
	function _getAllForkliftsIds(){
		global $conn, $arr, $sh;
		$i = 0;
		$sql = "SELECT Distinct f_id FROM forklift";
		
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_array($result))
		{
			$arr[$i++] = $row['f_id'];
		}
		return $arr;
	}
	
	/*	Function to get ForkLift name to send in 4 hour Email
	*/
	function _getForkliftNameForRun($fid){
		global $conn;
		$sql = "SELECT name FROM forklift WHERE f_id = '".$fid."'";
		
		if($result = mysqli_query($conn,$sql))
		{
			while($row = mysqli_fetch_array($result))
			{
				$forkliftName = $row['name'];
			}
		}
		return $forkliftName;
	}	

	/*	Function to get back UserName so send in 4 hour Email
	*/
	function _getUserNameForRun($fid){
		global $conn, $sh;
		$sql = "SELECT name FROM users WHERE f_id = '".$fid."' and shift='".$sh."'";
		
		if($result = mysqli_query($conn,$sql))
		{
			while($row = mysqli_fetch_array($result))
			{
				if($row['name'])
					$userName = $row['name'];
			}
		} 
		return $userName;
	}

?>