<!DOCTYPE html>
<html>
<?php
require_once "recaptchalib.php";

include "/a3incs/recapk.php";

// empty response
$response = null;

// check our secret key
$reCaptcha = new ReCaptcha($secret);

$sshow = $thanks = $stripejs = $buyjs = "";
$nothome = "index.php";
$capload = "<script src='https://www.google.com/recaptcha/api.js'></script>";
$searchable = true;
$meta = array("A3 Limited Request Page", "Tutors, Contractors, Clients, Request",  "request.php", "Request Page");
include "header.php";
?>  
  <div id="main" class="container">
	<?php include "/a3incs/reqform.php";
				  echo $thanks;
			?>
	<div id="reqfrmwrap">
		<h2>Submit a service request</h2>
		<br>
		<p>First of all, thank you for being a valued client of ours. We at A3Ltd strive to make
		things convenient for you. So if you have a subscription with us and would like to request
		additional services, please just fill out this short form. We promise it won't take long!</p>
		<br>
		<form id="reqfrm" method="POST" action="">
			<h5 class="formhead">Name:</h5><br><input type="text" name="yourname"><?php echo $nameErr ?><br>
			<h5 class="formhead">E-mail:</h5><br><input type="text" name="youremail"><?php echo $emailErr ?><br>
			<span class="red">Ensure that this is the same e-mail you have registered with us!</span><br>
			<h5 class="formhead">Service Type Requested:</h5><br><select name="servicetype">
				<option value="">Select Service Type</option>
				<option value="tutoring">Tutoring</option>
				<option value="marketingpr">Marketing and Public Relations</option>
				<option value="photo">Photography</option>
				<option value="infotech">Information Technology</option>
				<option value="physical">Physical Training</option>
				<option value="groundskeeping">Groundskeeping/Landscaping</option>
				<option value="production">Entertainment and Production</option>
				<option value="writeedit">Writing and Editing</option>
				<option value="log">Logistics and Delivery</option>
				<option value="other">Other</option>
			</select><?php echo $typeErr ?>
			<h5 class="formhead">Details of Service</h5></br><textarea name="servicedetails" rows="6" cols="25"></textarea><?php echo $detailErr ?>
			<br><br>
			<div class="g-recaptcha capresponse" data-sitekey="6LfAqAoTAAAAAKa6clrHUUaEUz6V7auY4gwr193F"></div><?php echo $capErr ?>
			<br>
			<input type="submit" name="submit" value="Submit" id="submit" /><input type="reset" name="reset" value="Clear" id="reset">
		</form>
	</div>
	<?php echo $capload ?>
	<?php echo $js ?>
  </div>
<?php 
include "footer.php"
?>