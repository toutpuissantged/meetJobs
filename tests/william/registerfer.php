<?php include('enregistre.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Inscription Particulier</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../public/vendor/bootstrap.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
	<body>
		
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
            <img src="assets/images/logo.svg" alt="logo" class="logo">
		  </div>
		  <!--menu-->
		<nav>
			<div class="menu">
			  <div class="m-left">
				  <h1 class="nom">Go-Meetjob</h1>
			  <div>
			  <div class="m-right">
			   <ul>
			   <li>
                  <a href="<?php echo $GLOBALS['urlMap']['regE'] ?>"class="m-forme">S'inscrire dans l'Entreperise</a>
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
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Inscription pour Particulier</h1>
            <form action="#!" action="<?php echo $GLOBALS['urlMap']['login'] ?>">
				<?php echo affich_error(); ?>
				<div class="form-group mb-4">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control"  value="<?php if(isset($Nom)){echo $Nom;}?>">
			  </div>
			  <div class="form-group mb-4">
                <label for="prenom">Prenoms</label>
                <input type="text" name="prenom" id="prenom" class="form-control"  value="<?php if(isset($prenom)){echo $prenom;}?>">
			  </div>
			  <div class="form-group mb-4">
                <label for="fonction">Fonction</label>
                <input type="text" name="fonction" id="fonction" class="form-control"  value="<?php if(isset($fonction)){echo $fonction;}?>">
			  </div>
			  <div class="form-group mb-4">
				<label for="sexe">Sexe</label>
				<select name="sexe" >
					<option value="M">Masculin</option>
					<option value="F">Feminin</option>
				</select>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com" value="<?php if(isset($email)){echo $email;}?>">
				
              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Mot de Passe">
			  </div>
			  <div class="form-group mb-4">
                <label for="password2">Confirmer Mot de Passe</label>
                <input type="password" name="password2" id="password2" class="form-control" placeholder="Confirmer Mot de Passe">
              </div>
              <input name="login" id="login" class="btn btn-block login-btn" type="button" value="S'inscrire">
            </form>
			<p>
    Avez-vous un compte? <a href="<?php echo $GLOBALS['urlMap']['login'] ?>">Se connecter</a> ou <a href="<?php echo $GLOBALS['urlMap']['home'] ?>">Retourner à l'acceuil</a>
    </p>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="assets/images/login.jpg" alt="login image" class="login-img">
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>