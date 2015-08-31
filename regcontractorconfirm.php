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
$serviceperf = $_SESSION['serviceperf'];
$zip = $_SESSION['zip'];
$distance = $_SESSION['distance'];

	switch ($distance) {
		case "<15":
		$distance = " within 15 miles of $zip that are";
		break;
		case "<30":
		$distance = " within 30 miles of $zip that are";
		break;
		case "<50":
		$distance = " within 50 miles of $zip that are";
		break;
		default:
		$distance = "";
	};
	
	if ($serviceperf == "other") {
		$serviceperf = "";
	} else {
		$serviceperf = " $serviceperf";
	};

	echo 
	"<h2>Thank you $name for your subscription</h2><br>
	<p>We will work hard to match you within clients$distance in need of your$serviceperf services</p>
	<br>
	<p>You should receive a payment confirmation in your inbox, if not or if there was any other issue,
	 please <a href='index.php#contact'>contact us</a> and we will work with you to get it sorted out.</p>
	 <br>";
	 
	 $_SESSION = array();
	 session_destroy(); 	 
?>
</div>
<?php 
include "footer.php" 
?>