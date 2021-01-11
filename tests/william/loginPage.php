<?php include('connexion.php') ?>
<!DOCTYPE HTML>
<html lang="fr">

<head>
	<title>Login</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Particles Login Form Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->
	<!-- Stylesheets -->
	<link href="assets/public/css/style.css" rel='stylesheet' type='text/css' />
	<!-- online fonts-->
	<link href="https://fonts.googleapis.com/css?family=Amiri:400,400i,700,700i" rel="stylesheet">
</head>

<body>
	<!--  particles  -->
	<div id="particles-js"></div>
	<!-- //particles -->
	<div class="w3ls-pos">
		<h1>LOGIN</h1>
		<div class="w3ls-login box">
			<!-- form starts here -->
			<form method="post" action="loginPage.php">
				<?php echo affich_error(); ?>
				<div class="agile-field-txt">
					<input type="email" name="email" id="email" placeholder="info@example.com" required="" value="<?php if(isset($login)){echo $login;}?>" />
				</div>
				<div class="agile-field-txt">
					<input type="password" name="password" placeholder="******" required="" id="password" />
					<div class="agile_label">
						<input id="check3" name="check3" type="checkbox" value="show password">
						<label class="check" for="check3">Remember me</label>
					</div>
				</div>
				<div class="w3ls-bot">
					<input type="submit" name="connecter">
				</div>
			</form>
		</div>
		<!-- //form ends here -->
		<!--copyright-->
		<div class="copy-wthree">
			<p>COPYRIGHT © 2020 GO-MEETJOB. TOUS DROITS RÉSERVÉS.
				<a href="http://w3layouts.com/" target="_blank"><strong>POWERED BY DCN TECHNOLOGIES<strong</a>
			</p>
		</div>
		<!--//copyright-->
	</div>
	<!-- scripts required  for particle effect -->
	<script src='assets/public/js/particles.min.js'></script>
	<script src="assets/public/js/index.js"></script>
	<!-- //scripts required for particle effect -->
</body>

</html>