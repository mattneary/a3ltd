<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php
$sshow = $capload = $stripejs = $buyjs = "";
$nothome = "index.php";
$searchable = true;
$meta = array("A3 Limited Contractor Registration Page", "Tutors, Contractors, Register",  "regcontractor.php", "Contractor Registration");
include "header.php";
?> 
<div id="main" class="container">
	<h2>Register as a contractor</h2>
	<br>
	<p>Thanks for your help! Business is booming and we certainly need it. Tell us a bit about yourself
	so we can send clients who can use your skill set. Just fill out the form below, subscribe, and we
	will start matching you with clients soon.</p>
	<?php 
	include "/a3incs/regconfrm.php"; 
	?>
	<div id='errorDisplay2'><?php echo $anyErr; ?><ul id='errorDisList2'>
	</ul></div>
	<form id="regcontractor" method="POST" action="">
		<div class="columnuno">
		  <div id="conerror1">
			<h5 class="formhead">Name:</h5><br><input type="text" name="yourname"><br>
		  </div>	
			<h5 class="formhead">Company:</h5><br><input type="text" name="company"><br>
		  <div id="conerror2">	
			<h5 class="formhead">E-mail:</h5><br><input type="text" name="youremail"><br>
		  </div>
		</div>
		<div class="columndos">
		  <div id="conerror3">
			<h5 class="formhead">City:</h5><br><input type="text" name="city"><br>
		  </div>	
		  <div id="conerror4">	
			<h5 class="formhead">State:</h5><br><input type="text" name="state"><br>
		  </div>
		  <div id="conerror5">
			<h5 class="formhead">Zip Code:</h5><br><input type="text" name="zip"><br>
		  </div>
		</div>
		  <div id="conerror6">
			<h5 class="formhead">Services Performed:</h5><br>
			<div id="chkhldr">
			<div id="chkhldr1">
				<input type="checkbox" name="serviceperf[]" value="tutoring">&nbsp;Tutoring<br>
				<input type="checkbox" name="serviceperf[]" value="marketing and PR">&nbsp;Marketing and Public Relations&nbsp;<br>
				<input type="checkbox" name="serviceperf[]" value="photography">&nbsp;Photography<br>
				<input type="checkbox" name="serviceperf[]" value="IT">&nbsp;Information Technology<br>
				<input type="checkbox" name="serviceperf[]" value="physical training">&nbsp;Physical Training<br>
			</div>
			<div id="chkhldr2">
				<input type="checkbox" name="serviceperf[]" value="landscaping">&nbsp;Groundskeeping/Landscaping<br>
				<input type="checkbox" name="serviceperf[]" value="production">&nbsp;Entertainment and Production<br>
				<input type="checkbox" name="serviceperf[]" value="writing and editing">&nbsp;Writing and Editing<br>
				<input type="checkbox" name="serviceperf[]" value="logistics">&nbsp;Logistics and Delivery<br>
				<input type="checkbox" name="serviceperf[]" value="other">&nbsp;Other<br><br>
			</div>
		</div>
		</div>
	  <div id="conerror7">	
		<h5 class="formhead clearline">Details of Service</h5></br>
		Put a summary of your services or copy/paste a plain text resume here</br></br>
			<textarea id="content-md" class="textarea-scrollbar scrollbar-outer" name="servicedetails" rows="25" cols="60"></textarea>
	  </div>		
			<h5 class="formhead">Work Area (Distance of Clients you are willing to work with):</h5><br>
			<input type="radio" name="distance" value="<15">Within 15 miles
			<input type="radio" name="distance" value="<30">Within 30 miles
			<input type="radio" name="distance" value="<50">Within 50 miles
			<input type="radio" name="distance" value="Any" checked="checked">Any (Remote Work is Fine)<br>
			<br><br>
		<input type="submit" name="submit" value="Next" id="submit" /><input type="reset" name="reset" value="Clear" id="reset">
	</form>
  </div>
   <script src='js/regErrors.js'></script>
<?php 
echo "<script>$nameErr $emailErr $cityErr $stateErr $zipErr $servErr1 $servErr2</script>";
include "footer.php";
?>