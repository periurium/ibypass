<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>iBypass | Experience The Real Internet</title>
  <meta name="author" content="Periurium, Umbriel">
  <meta name="description" content="Allowing people to bypass restrictions on networks in order to experience the real uncensored internet.">
  <meta name="keywords" content="keywords,here">
  <link rel="stylesheet" href="assets/css/home.css" type="text/css">
  <link rel="stylesheet" href="assets/css/normalize.css" type="text/css">
  </head>
  <body>
	<div id="landing" align="center">
		<div class="landing-main-wrap">
			<div class="main_text_wrap">
				<h1>Uncensor The Internet</h1>
				<h3>Securely and Anonymously</h3>
			</div>
			<div class="main_form">
				<!-- I wouldn't touch this part -->
					<form action="index.php" method="post">
						<div class="container">
							<div class="row">
								<input class="url" name="url" type="text"  autocomplete="off" placeholder="http://" />
								<input type="submit" class="submit" value="Go" />
							</div>
						</div>						
					</form>
					<script type="text/javascript">
						document.getElementsByName("url")[0].focus();
					</script>
				<!-- [END] -->
			</div>
		</div>
	</div>


	<!-- Error Handling -->
	
	<?php if(isset($error_msg)){ ?>

		<div id="error">
		<div class="error-background"></div>
		<div class="error-data">
			<div class="error-content">
				<div class="error-post">
					<p><?php echo strip_tags($error_msg); ?></p>
				</div>
				<div class="error-handle">
					<button class="error_close">Close</button>
					<button>Send Error Report</button>
				</div>
			</div>
		</div>
		
	</div>

	<?php } ?>

	<!-- Extra Scripts -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="assets/js/home_handler.js"></script>	
	</body>
</html>