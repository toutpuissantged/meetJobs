<?php include('connexion.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
    <link href="assets/public/css/inscript.css" rel='stylesheet' type='text/css' />
</head>
<body>
	<!--menu-->
	<nav>
		  <div class="menu">
			<div class="m-left">
				<h1 class="nom">Go-Meetjob</h1>
			<div>
			<div class="m-right">
			 <ul>
				<li>
			 	  <a href="inscrip.php"class="m-forme">S'inscrire</a>
			    </li>
			 	<li>
			 	 <a href="login.php"class="m-forme">Se connecter</a>
			 	</li>
			 	
            </ul>
			</div>
		  </div>
	</nav>
		<br>
		<br>	
<div class="header">
	<h2>CONNEXION</h2>
</div>
<form method="post" action="log2.php">
	<?php echo affich_error(); ?>
	
	<div class="input-group">
		<label>Login</label>
		<input type="text" name="email"  value="<?php if(isset($login)){echo $login;}?>">
	</div>
	<div class="input-group">
		<label>Mot de passe</label>
		<input type="password" name="password">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="connecterSocite">Se connecter</button>
	</div>
	<p>
		Avez-vous un compte? <a href="inscrip.php">S'inscrire</a> ou <a href="index2.php">Retourner à l'acceuil</a>
	</p>
</form>
</body>
</html>