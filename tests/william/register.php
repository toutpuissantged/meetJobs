<?php include('enregistre.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
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
			 	  <a href="<?php echo $GLOBALS['urlMap']['regE'] ?>"class="m-forme">S'inscrire</a>
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
	<h2>INSCRIPTION</h2>
	<h4> Particulier </h4>
</div>
<form method="post" action="<?php echo $GLOBALS['urlMap']['regP'] ?>">
	<?php echo affich_error(); ?>
	<div class="input-group">
		<label>Nom</label>
		<input type="text" name="nom" value="<?php if(isset($Nom)){echo $Nom;}?>">
	</div>
	<div class="input-group">
		<label>Prenom</label>
		<input type="text" name="prenom" value="<?php if(isset($prenom)){echo $prenom;}?>">
	</div>
	<div class="input-group">
		<label>Fonction</label>
		<input type="text" name="profession" value="<?php if(isset($fonction)){echo $fonction;}?>">
	</div>
	<div class="input-group">
		<label>Sexe</label>
		<select name="sexe" >
			<option value="M">Masculin</option>
		    <option value="F">Feminin</option>
		</select>
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php if(isset($email)){echo $email;}?>">
	</div>
	<div class="input-group">
		<label>Mot de passe</label>
		<input type="password" name="password">
	</div>
	
	<div class="input-group">
		<label>Confirmer mot de passe</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="inscrire">S'inscrire</button>
	</div>
	<p>
    Avez-vous un compte? <a href="<?php echo $GLOBALS['urlMap']['login'] ?>">Se connecter</a> ou <a href="<?php echo $GLOBALS['urlMap']['home'] ?>">Retourner à l'acceuil</a>
	</p>
</form>
</body>
</html>