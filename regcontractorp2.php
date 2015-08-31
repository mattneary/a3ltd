<?php
session_start();
				$name = $_SESSION['name'];
				$email = $_SESSION['email'];
				$city = $_SESSION['city'];
				$state = $_SESSION['state'];
				$zip = $_SESSION['zip'];
				$serviceperf = $_SESSION['serviceperf'];
				$servicedetails = $_SESSION['servicedetails'];
				$distance = $_SESSION['distance'];

?>
<!DOCTYPE html>
<html>
<?php 
				
require_once "recaptchalib.php";

include "/a3incs/recapk.php";

// empty response
$response = null;

// check our secret key
$reCaptcha = new ReCaptcha($secret);

require('/a3incs/config.inc.php');
$stripejs = "<script type='text/javascript' src='https://js.stripe.com/v2/'></script>";
$sshow = "";
$capload = "<script src='https://www.google.com/recaptcha/api.js'></script>";
$nothome = "index.php";
$buyjs = "<script type='text/javascript' src='js/buy.js'></script>";
$searchable = false;
$title = "Contractor Registration: Page 2";
include "header.php";
?>
<div id="main" class="container">
<!--form-->
		<h2>Payment Page</h2><a href="https://stripe.com/" target="_blank"><img src="img/big.png"></a><br><br>
		<p>Almost done! Using our secure* payment page, please enter your payment information. You will be charged
		$12.00 (USD) for a year of service, <strong>that's just one dollar a month!</strong>.</p>
		<p class="disclaim">* We do not collect your credit card information, Stripe securely processes your payment
		information. Please see our <a href="privacy.php">privacy policy</a> for more details</p>
		<br>
		<?php include "/a3incs/regsubscribecon.php" ?>
		<form id="payment-form" action="" method="POST">
		
				<?php // Show PHP errors, if they exist:
		if (isset($errors) && !empty($errors) && is_array($errors)) {
			echo '<div class="alert alert-error"><h4>Error!</h4>The following error(s) occurred:<ul>';
			foreach ($errors as $e) {
				echo "<li>$e</li>";
			}
			echo '</ul></div>';
		}?>
		
			<div id="payment-errors"></div>
		
			<label>Card Number</label>
			<input type="text" size="20" autocomplete="off" class="card-number"><br>
			<span>Enter the number without spaces or hyphens.</span><br>
			<label>CVC</label>
			<input type="text" size="4" autocomplete="off" class="card-cvc"><br>
			<label>Expiration (MM/YYYY)</label>
			<input type="text" size="2" class="card-expiry-month"">
			<span> / </span>
			<input type="text" size="4" class="card-expiry-year"><br><br>
			<div class="g-recaptcha capresponse" data-sitekey="6LfAqAoTAAAAAKa6clrHUUaEUz6V7auY4gwr193F"></div><?php echo $capErr ?>
			<br>
			<button type="submit" id="submitBtn">Subscribe</button>
		</form>
			
	<?php echo $capload ?>
</div>
<?php 
include "footer.php" 
?>