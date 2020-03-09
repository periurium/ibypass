<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>iBypass | Uncensor the Internet</title>
  <meta name="author" content="name">
  <meta name="description" content="description here">
  <meta name="keywords" content="keywords,here">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/skeleton.css" type="text/css">
	<link rel="stylesheet" href="assets/css/normalize.css" type="text/css">
  <link rel="stylesheet" href="assets/css/home.css" type="text/css">
  </head>

<body>
	<div id="landing" align="center">
		<div id="nav">
			<div class="nav_logo">
				<span>iBypass</soan>
			</div>
		</div>
		<div id="main">
			<div class="main_wrap">
				<div class="main_text">
					<h1>Uncensor The Internet</h1>
					<h3>Securely and Anonymously</h3>
				</div>
				<div class="main_form">
					<!-- I wouldn't touch this part -->

						<form action="index.php" method="post">
							<input class="url" name="url" type="text"  autocomplete="off" placeholder="http://" />
							<input type="submit" class="submit" value="Go" />
						</form>

						<script type="text/javascript">
							document.getElementsByName("url")[0].focus();
						</script>

					<!-- [END] -->
				</div>
			</div>
		</div>
	</div>
	<div id="about" align="center">
		<div class="about_wrap">
			<div class="container">
				<div class="row">
					<div class="two-thirds column">
						<div class="what_is">
							<h3>What is iBypass?</h3>
							<p>iBypass is what is commonly reffered to as a Web-Proxy. Allowing it's users to connect through one of our servers in order to view content that is normally censored by their network or government. It can also be used as a way to just browse the web securely and anonymously.</p>
						</div>
					</div>
					<div class="one-third column"></div>
				</div>
			</div>
		</div>
	</div>

	<?php if(isset($error_msg)){ ?>

	<div id="error">
		<p><?php echo strip_tags($error_msg); ?></p>
	</div>

	<?php } ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



</body>
</html>
