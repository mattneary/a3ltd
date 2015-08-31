<!DOCTYPE html>
<html>
<?php
$sshow = $capload = $stripejs = $buyjs = "";
$nothome = "index.php";
$searchable = true;
$meta = array("A3 Limited Registration Page", "Tutors, Contractors, Clients, Register",  "register.php", "Registration Page");
include "header.php";
?>
<div id="main" class="container">
	<h2>Register/Subscribe</h2>
	<br>
	<p>
	Welcome to <span class="bold">A3 Limited's</span> easy-to-use registration form. In 
	just a couple short steps, you will be on your way to find the client or service personnel
	of your dreams. <br><br>
	</p>
	<h3>What are you looking for?</h3>
	<div class="btnbox">
		<a href="regclient.php" class="btn btnleft btn-xl">Looking for workers</a>
		<a href="regcontractor.php" class="btn btnright btn-xl">I am a worker</a>
	</div>
	<br><br>
	<p>Already registered with us and need additional services? Go to our 
	<a href="request.php">request page</a>.</p>
  </div>
<?php 
include "footer.php"
?>