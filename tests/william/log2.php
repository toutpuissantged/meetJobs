<?php include('connexion.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<link rel="stylesheet" href="../../public/tpg/boot.css">
    <link href="../../public/assets/public/css/inscript.css" rel='stylesheet' type='text/css' />
    <link rel="apple-touch-icon" href="../../public/apple-touch-icon.png">
	<link rel="icon" href="../../public/assets/public/images/favicon.png" type="image/x-icon">
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
			 	  <a href="<?php echo $GLOBALS['urlMap']['regP'] ?>"class="m-forme">S'inscrire</a>
			    </li>
			 	<li>
			 	 <a href="<?php echo $GLOBALS['urlMap']['login'] ?>"class="m-forme">Se connecter</a>
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
<form method="post" action="<?php echo $GLOBALS['urlMap']['login'] ?>">
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
		<button type="submit" class="btn" name="connecter">Se connecter</button>
	</div>
	<p>
		Vous n'avez pas un compte? S'inscrire entant <a href="<?php echo $GLOBALS['urlMap']['regE'] ?>">Qu'entrepise </a>|<a href="<?php echo $GLOBALS['urlMap']['regP'] ?>"> Particulier</a>  ou <a href="<?php echo $GLOBALS['urlMap']['home'] ?>">Retourner à l'acceuil</a>
	</p>
</form>
</body>
</html>