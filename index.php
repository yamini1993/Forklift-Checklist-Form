<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Accudyn Crane Operator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <script src="./js/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/jquery.validate.min.js"></script>
  <script src="./js/script.js"></script>
  <style>
  .modal-header, h4, .close {
      background-color: #9f1818;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
.error{
}	

  </style>
</head>
<style>

</style>
<body>
<div class="container form_boder">
	<div class="row">
        <div class="col-12" style="background-color: #800000; height: 76px;"><img src="./images/logo.jpg" id="logoimg">
			<span id="title-fl">
				<b>FORKLIFT CHECKLIST</b>
			</span>
		</div>
	</div>
	
	<form class="form" action="" id="idForm" >
		<div class="row" >
			<div class="col-md-4 col-sm-12 col-xs-12 top-row-6">
				<div class="form-group col-md-12 col-sm-12 col-xs-12">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<label class="control-label">Forklift</label>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-9">
						<select id="sel_forklift" name="sel_forklift"class="form-control input_field capsup_width">
							<option value="0"></option>
							<?php echo getForkLifts();?>
						</select>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12 top-row-6">
				<div class="form-group col-md-12 col-sm-12 col-xs-12">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<label class="control-label">Name</label>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-9">
						<select id="sel_user" name="sel_user" class="form-control input_field capsup_width">
							<option value="0"></option>
							<?php echo getUsersSelect(); ?>
						</select>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12 top-row-6">
				<div class="form-group col-md-12 col-sm-12 col-xs-12">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<label class="control-label">Date</label>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-9">
						<label class="control-label"><?php echo date("m/d/Y");?></label>
					</div>
				</div>
			</div>
		</div>
		<div class="row row1 bord_bottom" style="text-align:center; padding: 15px; display:none;background-color: #ab3041;" id="form-msg">
			<div class="col-md-12 col-sm-12 col-xs-12 top-row-12">
				<span id="form-msg-text" style="color:#fff; font-size:20px;">Form Already Submitted</span>
			</div>
		</div>	
		<!--first row--->
		<div class="row row0">
			<div class="col-md-12 col-sm-12 col-xs-12 bord_right bord_top" >
				<div class="row ">
					<div class="col-md-6 col-sm-6 col-xs-6 bord_right bord_padding"><span class="tbl-title"><b>CHECK</b><span></div>
					<div class="col-md-2 col-sm-2 col-xs-2 bord_right bord_padding"><span class="tbl-title"><b>YES</b><span></div>
					<div class="col-md-2 col-sm-2 col-xs-2 bord_right bord_padding"><span class="tbl-title"><b>NO</b><span></div>
					<div class="col-md-2 col-sm-2 col-xs-2 bord_right bord_padding"><span class="tbl-title"><b>NA</b><span></div>
				</div>
			</div>
		</div>
		<!--end first row--->
		<!--1st part-->
	<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12 bord_right  bord_top" >
		<div class="row row1 bord_bottom">
			<div class="col-md-6 col-sm-6 col-xs-6 bord_left bord_right bord_padding">
				<span id="span-t-1" class="span-t tires"><b>1. TIRES</b></span>
				<span id="span-t-1-txt" class="span-txt"><br/>Check they are in good condition, intact with rim.  Look for visual wear or damage.  Check tyre pressure</span>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>Yes</span>
				<input type="radio" name="tires" class="form-control emp_input_field  gray-class" value="1">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>No</span>
				<input type="radio" name="tires" id="rd_no_1" class="form-control emp_input_field   gray-class rd_no" value="0">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>N/A</span>
				<input type="radio" name="tires" class="form-control emp_input_field  gray-class" value="2">
			</div>
		</div>
		<div class="row bord_bottom">
			<div class="col-md-6 col-sm-6 col-xs-6 bord_left bord_right bord_padding">
				<span id="span-t-2" class="span-t fluids"><b>2. FLUIDS</b></span>
				<span id="span-t-2-txt" class="span-txt"><br/>Check oil, hydraulics, battery, fuel and coolant for leaks including hoses under fork lift</span>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>Yes</span>
				<input type="radio" name="fluids" class="form-control emp_input_field" value="1">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>No</span>
				<input type="radio" name="fluids" id="rd_no_2" class="form-control emp_input_field rd_no" value="0">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>N/A</span>
				<input type="radio" name="fluids" class="form-control emp_input_field" value="2">
			</div>
		</div>
		<div class="row row1 bord_bottom">
			<div class="col-md-6 col-sm-6 col-xs-6 bord_left bord_right bord_padding">
			<span id="span-t-3" class="span-t structure"><b>3. STRUCTURE</b></span>
			<span id="span-t-3-txt" class="span-txt"><br/>Check for cracks, bends, dents, distortion or broken parts. Check apron & overhead guards are intact & secure</span>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>Yes</span>
				<input type="radio" name="structure" class="form-control emp_input_field gray-class" value="1" >
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>No</span>
				<input type="radio" name="structure" class="form-control emp_input_field  gray-class rd_no" value="0">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>N/A</span>
				<input type="radio" name="structure" class="form-control emp_input_field  gray-class" value="2">
			</div>
		</div>
		<div class="row bord_bottom">
			<div class="col-md-6 col-sm-6 col-xs-6 bord_left bord_right bord_padding">
			<span id="span-t-4" class="span-t forks"><b>4. FORKS</b></span>
			<span id="span-t-4-txt" class="span-txt"><br/>Check they are evenly spread with locking pins in place. Check there is no sharp edges or distortion</span>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>Yes</span>
				<input type="radio" name="forks" class="form-control emp_input_field" value="1">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>No</span>
				<input type="radio" name="forks" class="form-control emp_input_field rd_no" value="0">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>N/A</span>
				<input type="radio" name="forks" class="form-control emp_input_field" value="2">
			</div>
		</div>
		<div class="row row1 bord_bottom">
			<div class="col-md-6 col-sm-6 col-xs-6 bord_left bord_right bord_padding">
			<span id="span-t-5" class="span-t mast"><b>5. MAST</b></span>
			<span id="span-t-5-txt" class="span-txt"><br/>Check chains are level with no obstructions, rams not pitted or leaking.  Check for any wear to lift chains and guides, inspect hydraulic cylinders, look for any leaks</span>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>Yes</span>
				<input type="radio" name="mast" class="form-control emp_input_field  gray-class" value="1">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>No</span>
				<input type="radio" name="mast" class="form-control emp_input_field  gray-class rd_no" value="0">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>N/A</span>
				<input type="radio" name="mast" class="form-control emp_input_field  gray-class" value="2">
			</div>
		</div>
		<div class="row bord_bottom">
			<div class="col-md-6 col-sm-6 col-xs-6 bord_left bord_right bord_padding">
			<span id="span-t-6" class="span-t battery"><b>6. BATTERY</b></span>
			<span id="span-t-6-txt" class="span-txt"><br/>Check it is operational and for any damage</span>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>Yes</span>
				<input type="radio" name="battery" class="form-control emp_input_field" value="1">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>No</span>
				<input type="radio" name="battery" class="form-control emp_input_field rd_no" value="0">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>N/A</span>
				<input type="radio" name="battery" class="form-control emp_input_field" value="2">
			</div>
		</div>
		<div class="row row1 bord_bottom">
			<div class="col-md-6 col-sm-6 col-xs-6 bord_left bord_right bord_padding">
			<span id="span-t-7" class="span-t gof"><b>7. GAS OPERATED FORKS</b></span>
			<span id="span-t-7-txt" class="span-txt"><br/>Check gas levels are ok and gas cylinder is not damaged damage.  Check gas cylinder is secure</span>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>Yes</span>
				<input type="radio" name="gof" class="form-control emp_input_field  gray-class" value="1">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>No</span>
				<input type="radio" name="gof" class="form-control emp_input_field  gray-class rd_no" value="0">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>N/A</span>
				<input type="radio" name="gof" class="form-control emp_input_field  gray-class" value="2">
			</div>
		</div>
		<div class="row bord_bottom">
			<div class="col-md-6 col-sm-6 col-xs-6 bord_left bord_right bord_padding">
			<span id="span-t-8" class="span-t eb"><b>8. ENGINE BAY</b></span>
			<span id="span-t-8-txt" class="span-txt"><br/>Check it is generally clean?</span>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>Yes</span>
				<input type="radio" name="eb" class="form-control emp_input_field" value="1">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>No</span>
				<input type="radio" name="eb" class="form-control emp_input_field rd_no" value="0">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>N/A</span>
				<input type="radio" name="eb" class="form-control emp_input_field" value="2">
			</div>
		</div>
		<div class="row row1 bord_bottom">
			<div class="col-md-6 col-sm-6 col-xs-6 bord_left bord_right bord_padding">
			<span id="span-t-9" class="span-t controls1"><b>9. CONTROLS (pre start)</b></span>
			<span id="span-t-9-txt" class="span-txt"><br/>Check seat condition.  Check controls are clearly marked, seat & steering wheel are secure & properly adjusted. Seat belt
(where fitted) works as intended.</span>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>Yes</span>
				<input type="radio" name="controls1" class="form-control emp_input_field  gray-class" value="1">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>No</span>
				<input type="radio" name="controls1" class="form-control emp_input_field  gray-class rd_no" value="0">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>N/A</span>
				<input type="radio" name="controls1" class="form-control emp_input_field  gray-class" value="2">
			</div>
		</div>
		<div class="row bord_bottom">
			<div class="col-md-6 col-sm-6 col-xs-6 bord_left bord_right bord_padding">
			<span id="span-t-10" class="span-t controls2"><b>10. CONTROLS (post start)</b></span>
			<span id="span-t-10-txt" class="span-txt"><br/>Check controls and pedals are working. No unusual</span>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>Yes</span>
				<input type="radio" name="controls2" class="form-control emp_input_field" value="1">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>No</span>
				<input type="radio" name="controls2" class="form-control emp_input_field rd_no" value="0">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>N/A</span>
				<input type="radio" name="controls2" class="form-control emp_input_field" value="2">
			</div>
		</div>
		<div class="row row1 bord_bottom">
			<div class="col-md-6 col-sm-6 col-xs-6 bord_left bord_right bord_padding">
			<span id="span-t-11" class="span-t capacity"><b>11. CAPACITY/LOAD PLATE</b></span>
			<span id="span-t-11-txt" class="span-txt"><br/>Check load-capacity plate if fitted, legible and correct.  What is your safe working load (inc when travelling, tilted & lifting)?</span>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>Yes</span>
				<input type="radio" name="capacity" class="form-control emp_input_field  gray-class" value="1">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>No</span>
				<input type="radio" name="capacity" class="form-control emp_input_field  gray-class rd_no" value="0">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>N/A</span>
				<input type="radio" name="capacity" class="form-control emp_input_field  gray-class" value="2">
			</div>
		</div>
		<div class="row bord_bottom">
			<div class="col-md-6 col-sm-6 col-xs-6 bord_left bord_right bord_padding">
			<span id="span-t-12" class="span-t horn"><b>12. REVERSE BUZZER & HORN</b></span>
			<span id="span-t-12-txt" class="span-txt"><br/>Check working</span>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>Yes</span>
				<input type="radio" name="horn" class="form-control emp_input_field" value="1">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>No</span>
				<input type="radio" name="horn" class="form-control emp_input_field rd_no" value="0">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>N/A</span>
				<input type="radio" name="horn" class="form-control emp_input_field" value="2">
			</div>
		</div>
		<div class="row row1 bord_bottom">
			<div class="col-md-6 col-sm-6 col-xs-6 bord_left bord_right bord_padding">
			<span id="span-t-13" class="span-t lights"><b>13. LIGHTS & BEACON</b></span>
			<span id="span-t-13-txt" class="span-txt"><br/>Check working</span>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>Yes</span>
				<input type="radio" name="lights" class="form-control emp_input_field  gray-class" value="1">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>No</span>
				<input type="radio" name="lights" class="form-control emp_input_field  gray-class rd_no" value="0">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>N/A</span>
				<input type="radio" name="lights" class="form-control emp_input_field  gray-class" value="2">
			</div>
		</div>
		<div class="row bord_bottom">
			<div class="col-md-6 col-sm-6 col-xs-6 bord_left bord_right bord_padding">
			<span id="span-t-14" class="span-t steering"><b>14. STEERING</b></span>
			<span id="span-t-14-txt" class="span-txt"><br/>Check smooth from lock to lock, no binding</span>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>Yes</span>
				<input type="radio" name="steering" class="form-control emp_input_field" value="1">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>No</span>
				<input type="radio" name="steering" class="form-control emp_input_field rd_no" value="0">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>N/A</span>
				<input type="radio" name="steering" class="form-control emp_input_field" value="2">
			</div>
		</div>
		<div class="row row1 bord_bottom">
			<div class="col-md-6 col-sm-6 col-xs-6 bord_left bord_right bord_padding">
			<span id="span-t-15" class="span-t brakes"><b>15. BRAKES</b></span>
			<span id="span-t-15-txt" class="span-txt"><br/>Check both brake & park brake for proper operation</span>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>Yes</span>
				<input type="radio" name="brakes" class="form-control emp_input_field  gray-class" value="1">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>No</span>
				<input type="radio" name="brakes" class="form-control emp_input_field  gray-class rd_no" value="0">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>N/A</span>
				<input type="radio" name="brakes" class="form-control emp_input_field  gray-class" value="2">
			</div>
		</div>
		<div class="row bord_bottom">
			<div class="col-md-6 col-sm-6 col-xs-6 bord_left bord_right bord_padding">
			<span id="span-t-16" class="span-t pedal"><b>16. SAFTEY PEDAL</b></span>
			<span id="span-t-16-txt" class="span-txt"><br/>Check the motor cuts out</span>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>Yes</span>
				<input type="radio" name="pedal" class="form-control emp_input_field" value="1">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>No</span>
				<input type="radio" name="pedal" class="form-control emp_input_field rd_no" value="0">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>N/A</span>
				<input type="radio" name="pedal" class="form-control emp_input_field" value="2">
			</div>
		</div>
		<div class="row row1 bord_bottom">
			<div class="col-md-6 col-sm-6 col-xs-6 bord_left bord_right bord_padding">
			<span id="span-t-17" class="span-t power"><b>17. POWER DISCONNECT</b></span>
			<span id="span-t-17-txt" class="span-txt"><br/>Check all electric power cuts out</span>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>Yes</span>
				<input type="radio" name="power" class="form-control emp_input_field  gray-class" value="1">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>No</span>
				<input type="radio" name="power" class="form-control emp_input_field  gray-class rd_no" value="0">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>N/A</span>
				<input type="radio" name="power" class="form-control emp_input_field  gray-class" value="2">
			</div>
		</div>
		<div class="row bord_bottom">
			<div class="col-md-6 col-sm-6 col-xs-6 bord_left bord_right bord_padding">
			<span id="span-t-18" class="span-t hydraulics"><b>18. HYDRAULICS</b></span>
			<span id="span-t-18-txt" class="span-txt"><br/>Operate lift, tilt & reach to full extent of travel</span>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>Yes</span>
				<input type="radio" name="hydraulics" class="form-control emp_input_field" value="1">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>No</span>
				<input type="radio" name="hydraulics" class="form-control emp_input_field rd_no" value="0">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>N/A</span>
				<input type="radio" name="hydraulics" class="form-control emp_input_field" value="2">
			</div>
		</div>
		<div class="row row1 bord_bottom">
			<div class="col-md-6 col-sm-6 col-xs-6 bord_left bord_right bord_padding">
			<span id="span-t-19" class="span-t guards"><b>19. GUARDS</b></span>
			<span id="span-t-19-txt" class="span-txt"><br/>Check overhead, load backrest</span>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>Yes</span>
				<input type="radio" name="guards" class="form-control emp_input_field  gray-class" value="1">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>No</span>
				<input type="radio" name="guards" class="form-control emp_input_field  gray-class rd_no" value="0">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>N/A</span>
				<input type="radio" name="guards" class="form-control emp_input_field  gray-class" value="2">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-6 bord_left bord_right bord_padding">
			<span id="span-t-20" class="span-t attachments"><b>20. ATTACHMENTS</b></span>
			<span id="span-t-20-txt" class="span-txt"><br/>Check they function correctly, no unusual noises</span>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>Yes</span>
				<input type="radio" name="attachments" class="form-control emp_input_field" value="1">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>No</span>
				<input type="radio" name="attachments" class="form-control emp_input_field rd_no" value="0">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 bord_right emptbord_padding">
				<span>N/A</span>
				<input type="radio" name="attachments" class="form-control emp_input_field" value="2">
			</div>
		</div>
		
		<div class="row row1 bord_bottom" style="text-align:center;" >
			<div style="margin:25px 0px;"><input type="submit" value="Submit Form" ></div>
		</div>
		<div class="row" style="margin:10px 0px;">
			<div>&nbsp;</div>
		</div>
	</div>

</div>

</form>
<!--end of 1st part-->

<div class="row bord_bottom bord_top">
<!--<div class="col-md-3 col-sm-4 col-xs-12">
<label class="control-label">Operators Condition Code:</label>
</div>
<div class="col-md-2 col-sm-3 col-xs-12">
<label class="control-label">A=Aacceptable</label>
</div>
<div class="col-md-3 col-sm-5 col-xs-12">
<label class="control-label">D=Defective, Report at once</label>
</div>-->
</div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock" id="modal-header-text"></span> ISSUE FORM</h4>
        </div>
        <div class="modal-body" id="modal-body-text">
			<span class="throw_error"></span>
            <div id="success"></div>
			<form id="noForm" action="" role="form">
				<input type="hidden" id="typename" name="typename" value>
				<div class="form-group">
				  <label for="foorklift"><span class="glyphicon glyphicon-user"></span> Forklift:<span id="noform-forklift" style="font-size: 15px; color: #0a009b;"></span></label>
				  <input type="hidden" id="forklift" name="forklift" value=""/>
				</div>
				<div class="form-group">
				  <label for="usrname"><span class="glyphicon glyphicon-user"></span> Name: <span id="noform-name" style="font-size: 15px; color: #0a009b;"></span></label>			  
				  <input type="hidden" id="opername" name="opername" value=""/>
				</div>
				<div class="form-group">
				  <label for="usrname"><span class="glyphicon glyphicon-user"></span> Subject:</label>
				  <span id="issue-name"></span>
				  <input type="text" class="form-control" name="subject" id="subject" value="">
				</div>
				<div class="form-group">
				  <label for="exampleFormControlTextarea3">Report Your Issue:</label>
				  <textarea class="form-control" name="message" id="message" rows="7"></textarea>
				</div>
			
            <!--<button type="button" id="btn-submit-issue-form" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Submit Issue</button> -->
			<input type="submit" class="btn btn-default btn-success btn-block" value="Submit Issue">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
          <!--<p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>-->
        </div>
      </div>
    </div>
  </div> 

</div>
</body>
</html>