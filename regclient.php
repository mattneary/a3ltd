<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php
$sshow = $capload = $stripejs = $buyjs = "";
$nothome = "index.php";
$searchable = true;
$meta = array("A3 Limited Client Registration Page", "Tutors, Clients, Register",  "regclient.php", "Client Registration");
include "header.php";
?> 
<div id="main" class="container">
	<h2>Register to find contractors</h2>
	<br>
	<p>You decided to subscribe, great! This quick and easy form will be the hardest part of
	the whole ordeal. We at A3 are going to do all the heavy lifting to find you a quality contractor.
	So just let us know what you need in this form below, subscribe, and relax knowing that project
	you have planned is in great hands!</p>
	<?php 
	include "/a3incs/regclifrm.php"; 
	?>
	<div id='errorDisplay'><?php echo $anyErr; ?><ul id='errorDisList'>
	</ul></div>
	<form id="regclient" method="POST" action="">
		<div class="columnuno">
			<div id="error1">
			  <h5 class="formhead">Name:</h5><br><input type="text" name="yourname"><br>
			</div>
			  <h5 class="formhead">Company:</h5><br><input type="text" name="company"><br>
			<div id="error2">
			  <h5 class="formhead">E-mail:</h5><br><input type="text" name="youremail"><br>
			</div>
		</div>
		<div class="columndos">
		    <div id="error3">
			  <h5 class="formhead">City:</h5><br><input type="text" name="city"><br>
			</div>
			<div id="error4">
  			  <h5 class="formhead">State:</h5><br><input type="text" name="state"><br>
			</div>
			<div id="error5">
			  <h5 class="formhead">Zip Code:</h5><br><input type="text" name="zip"><br>
			</div>
		</div>
			<div id="error6">
			  <h5 class="formhead">Service Type Requested:</h5><br>
				  <select name="serviceneed">
					<option value="">Select Service Type</option>
					<option value="tutoring">Tutoring</option>
					<option value="marketing and PR">Marketing and Public Relations</option>
					<option value="photography">Photography</option>
					<option value="IT">Information Technology</option>
					<option value="physical training">Physical Training</option>
					<option value="landscaping">Groundskeeping/Landscaping</option>
					<option value="production">Entertainment and Production</option>
					<option value="writing and editing">Writing and Editing</option>
					<option value="logistics">Logistics and Delivery</option>
					<option value="other">Other</option>
				  </select>
			</div>
			<div id="error7">
			  <h5 class="formhead">Details of Service</h5></br><textarea name="servicedetails" rows="6" cols="25"></textarea>
			</div>  
			  <h5 class="formhead">Contractor Distance:</h5><br>
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
  
  