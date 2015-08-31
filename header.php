<?php 

function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="activepage"';
}
	include "includes/functions.php";
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php echo "$metadisplay" ?>
  <title>A&#179; &#124; <?php echo "$meta[3]" ?> </title>
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap-test.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/agency-large.css" rel="stylesheet">
   <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
  <!-- Custom Scrollbar -->
  <link rel="stylesheet" type="text/css" href="css/jquery.scrollbar.css">
  <?php echo "$sshow"?>
  <?php echo "$stripejs" ?>
  </head>
<body id="page-top" class="index">
 <!--Top Background for visibility-->
	<div id="topbg"></div>
	<!-- Navigation -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <h1><a class="navbar-brand page-scroll" href="index.php"><img src="img/logo.png" alt="A3Ltd - Anything, Anytime, Anywhere"></a></h1>
      </div>
	 <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="hidden">
            <a href="#page-top"></a>
          </li>
		  <li <?=echoActiveClassIfRequestMatches("register")?>>
            <a class="page-scroll" href="register.php">Register</a>
          </li>
		  <li <?=echoActiveClassIfRequestMatches("request")?>>
            <a class="page-scroll" href="request.php">Submit Request</a>
          </li>
          <li>
            <a class="page-scroll" href="<?php echo "$nothome"?>#contact">Contact</a>
          </li>
		  <li <?=echoActiveClassIfRequestMatches("about")?>>
            <a class="page-scroll" href="about.php">About Us</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>