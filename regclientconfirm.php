<?php
session_start();

?>
<!DOCTYPE html>
<html>
<?php 
$sshow = $capload = $stripejs = $buyjs = "";
$nothome = "index.php";
$searchable = false;
$title = "Client Registration Confirmation";
include "header.php";
?>
<div id="main" class="container">
<?php 
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$serviceneed = $_SESSION['serviceneed'];
$zip = $_SESSION['zip'];
$distance = $_SESSION['distance'];

	switch ($distance) {
		case "<15":
		$distance = " within 15 miles of $zip";
		break;
		case "<30":
		$distance = " within 30 miles of $zip";
		break;
		case "<50":
		$distance = " within 50 miles of $zip";
		break;
		default:
		$distance = "";
	}
	
	if ($serviceneed == "other") {
		$serviceneed = "";
	} else {
		$serviceneed = " $serviceneed";
	}

	echo 
	"<h2>Thank you $name for your subscription</h2>
	<p>We will work hard to find a suitable contractor$distance that fits your$serviceneed needs</p>
	<br>
	<p>You should receive a payment confirmation in your inbox, if not or if there was any other issue,
	 please <a href='index.php#contact'>contact us</a> and we will work with you to get it sorted out.</p>
	 <br>
	 <p>If you need any other services during your subscription (you can request as many as you need) please
	 use our <a href='request.php'>request</a> form. Ensure you use the e-mail that you used to register with
	 us ($email).</p>";
	 
	 $_SESSION = array();
	 session_destroy(); 	 
?>
</div>
<?php 
include "footer.php" 
?>