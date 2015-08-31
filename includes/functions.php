<?php

if ($searchable == true) {
				$metadisplay = <<<METADISPLAY
  <meta name = 'description' content = '$meta[0]' />
  <meta name = 'keywords' content = '$meta[1]' />
  <meta name = 'robots' content = 'index,follow' /><meta property='og:type' content='website' />
  <meta property='og:url' content='https://www.a3ltd.co/$meta[2]' />
  <meta property='og:description' content= '$meta[0]' />
  <meta property='og:title' content='A&#179; &#124; $meta[3]' /> 
  <meta property='og:image' content='https://www.a3ltd.co/img/logo.png' />
METADISPLAY;
	} else {
		$metadisplay = "";
		$meta = array("","","",$title);
	}

				function test_input($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlentities($data);
			return $data;
		}

?>