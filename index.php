<!DOCTYPE html>
<html>
<?php
require_once "recaptchalib.php";
include "/a3incs/recapk.php";

// empty response
$response = null;

// check our secret key
$reCaptcha = new ReCaptcha($secret);
$sshow = <<<SLIDESHOW
  <style>#topbg {height:100px}</style>
  <script src="js/jquery.js"></script>
  <script src="js/slideshow.js"></script>
SLIDESHOW;
$nothome = $thanks = $stripejs = $buyjs = "";
$capload = "<script src='https://www.google.com/recaptcha/api.js'></script>";
$searchable = true;
$meta = array("A3 Limited provides their clients with the best, most affordable pre-screened contractors. If you are looking for help or clients, sign up with us!", "Tutors, Contractors, Clients",  "index.php", "Anything, Anytime, Anywhere");
include "header.php";
?>

  <!-- Slideshow -->
  <div id="header">
	<div class="container">
		<ul id="slideshow">
			<li id="slide1">
				<div class="intro-text">
					<div class="intro-lead-in">Let us find you</div>
					<div class="intro-heading">The Perfect Tutor!</div>
				</div>
			</li>
			<li id="slide2">
				<div class="intro-text">
					<div class="intro-lead-in">Or perhaps you are looking for</div>
					<div class="intro-heading">Talented IT Technicians!</div>
				</div>
			</li>
			<li id="slide3">
				<div class="intro-text">
					<div class="intro-lead-in">Whatever it is...</div>
					<div class="intro-heading">Find It On A³</div>
					<a href="#features" class="page-scroll btn btn-xl">Tell Me More</a>
				</div>
			</li>
		</ul>
    </div>
  </div>
  
  <!-- Services Section -->
  <section id="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">How it Works</h2>
          <h3 class="section-subheading text-muted">A3 uses a network of trusted contractors to instantly find matches.</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Easy Posting</h4>
          <p class="text-muted">Posting jobs to A3 couldn't be easier. Input a time range, a price range, and the details of the job, then sit back as contractors respond.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Local Workers</h4>
          <p class="text-muted">A3 is built on a strong network of workers local to Columbus, Ohio. For the past year, A3 has sought out and screened countless contractors.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-hand-o-right fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Painless Coordination</h4>
          <p class="text-muted">Once a job has been posted, our network of contractors take over. They all actively check the listings and will be alerted when a job of interest to them is posted.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Get in Touch</h2>
          <h3 class="section-subheading text-muted">Reach out if you would like to hear more or get involved.</h3>
          <div class="card">
            <h1>Contact and Support</h1>
            <p>Get a hold of us <a href="javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">here</a></br>
			...or check out our <a href="faqs.php">FAQ's</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--Contact Form-->
  <div id="fade" class="black_overlay">
  </div>
  <div id="light" class="white_content">
	<div id="closebox">
		<a href="javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close X</a>
	</div>
		<?php include "/a3incs/contact.php";
			  echo $thanks;
		?>
		<form id="contactfrm" method="POST" role="form" action="">
			Name:<br><input type="text" name="yourname"><?php echo $nameErr ?><br>
			E-mail:<br><input type="text" name="youremail"><?php echo $emailErr ?><br>
			Message:<br><textarea class="textarea-scrollbar scrollbar-outer" name="message" rows="6" cols="25"></textarea>
			<?php echo $textErr ?>
			<br>
			<div class="g-recaptcha capresponse" data-sitekey="6LfAqAoTAAAAAKa6clrHUUaEUz6V7auY4gwr193F"></div><?php echo $capErr ?>
			<br>
			<input type="submit" name="submit" value="Submit" id="submit" /><input type="reset" name="reset" value="Clear" id="reset">
		</form>
		<?php echo $capload ?>
		<?php echo $js?>
  </div>      
<?php 
include "footer.php"
?>