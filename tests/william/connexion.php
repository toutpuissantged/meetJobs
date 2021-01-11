<?php
include('../core/run.php');
		session_start();

		echo FlashGet('login');
		//  se connecter à la BD
			
			try {
				$dbinfo=$GLOBALS['db'];
    			$bd = new PDO('mysql:host=localhost;dbname='.$dbinfo["name"], $dbinfo["login"], $dbinfo["password"]);
				$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$bd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);  
			} catch (PDOException $e) {
				echo "Connection failed : ". $e->getMessage();
			}

		//declaration du tableau des erreurs

		$errors   = array(); 

		// Appel de la fonction enregistrer 
		if (isset($_POST['connecter'])) {
			connexion("user");
		}
		if (isset($_POST['connecterSocite'])) {
			connexion("emtreprise");
		}
		//enregistrer
		function connexion($tableName){
			// definition des varriables globales
			global $bd, $errors, $Nom, $email,$prenom;

			// Affectation de valeurs

			$login       = $_POST['email'];
			$password    = $_POST['password'];
			

			// Contrôle des champs
			
			if (empty($login)) { 
				array_push($errors, "Le login est obligatoire"); 
			}

			if (empty($password)) { 
				array_push($errors, "le mot de passe est obligatoire"); 
			}
		
				$verf_login = $bd->prepare("SELECT * FROM "."".$tableName ." WHERE email = ?  AND mpd= ?");
				$verf_login->execute(array($login , $password));
				$connex= $verf_login->rowCount();
				
				if ($connex!=1) 
				{
		
					array_push($errors, "Login ou mot de passe erroné"); 
				}
		
				// enregistrer s'il y a pas d'erreur
				if (count($errors) == 0) {
					
					if($connex==1)
					{
					$allinfo           = $verf_login->fetch();
					$_SESSION['id']    = $allinfo['matricule'];
					#FlashSet('home','tu vient de te connecter');
					header('location: '. $GLOBALS['urlMap']['home']);
					}
		
				}
			
			
			
		
		}

		// fonction d'affichage d'erreure
		function affich_error()
		 {
			global $errors;

			if (count($errors) == 1){
				echo '<div class="error" style ="">';
					foreach ($errors as $error){
						echo $error .'<br>';
					}
				echo '</div>';
			}
			if (count($errors) == 3){
				echo '<div class="error">';
						echo $error ="Tous les champs doivent être remplit";
					
				echo '</div>';
			}
		}
		function utilisateur()
		{
			if (isset($_SESSION['id'])) {
				return true;
			}else{
				return false;
			}
		}
?>	