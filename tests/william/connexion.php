<?php
include('../core/run.php');

class Con
{


	public function connexion(){
			// definition des varriables globales
			global $bd, $errors, $Nom, $email,$prenom;

			// Affectation de valeurs

			$login       = $_POST['email'];
			$password    = $_POST['password'];
			$table1='user';
			$table2='emtreprise';
			

			// Contrôle des champs
			
			if (empty($login)) { 
				array_push($errors, "Le login est obligatoire"); 
			}

			if (empty($password)) { 
				array_push($errors, "le mot de passe est obligatoire"); 
			}
		
				$verf_login = $bd->prepare("SELECT * FROM "."".$table1 ." WHERE email = ?  AND mpd= ?");
				$verf_login->execute(array($login , $password));
				$connex= $verf_login->rowCount();
				
				if ($connex!=1) 
				{
		
					#array_push($errors, "Login ou mot de passe erroné");
					$verf_login = $bd->prepare("SELECT * FROM "."".$table2 ." WHERE email = ?  AND mpd= ?");
					$verf_login->execute(array($login , $password));
					$connex2= $verf_login->rowCount();
					if ($connex2!=1) {
						array_push($errors, "Login ou mot de passe erroné");
					}
					else{
							$_SESSION['user']['acount']='entreprise';
							echo "1 else";
					}
				
				}
				else{
					$_SESSION['user']['acount']='particulier';
					echo "2 else";
				}
		
				// enregistrer s'il y a pas d'erreur
				if (count($errors) == 0) {
					
					if($connex==1 or $connex2==1)
					{
					$allinfo           = $verf_login->fetch();
					$_SESSION['id']    = $allinfo['matricule'];
					$_SESSION['user']['name']    = $allinfo['nom'];
					if ($connex2==1) {
						$_SESSION['user']['name']    = $allinfo['nom'];
					}

					#FlashSet('home','tu vient de te connecter');
					header('location: '. $GLOBALS['urlMap']['home']);
					}
		
				}
			
			return 'next';
			
		
		}

	public function affich_error()
	 {
		global $errors;
		$Boostrap=new Boostrap;
		if (count($errors) == 1){
			echo '<div class="error" style ="">';
				foreach ($errors as $error){
					echo $Boostrap->alert($error .'<br>','danger');
				}
			echo '</div>';
		}
		if (count($errors) == 3){
			echo '<div class="error">';
					echo $error ="Tous les champs doivent être remplit";
				
			echo '</div>';
		}
	}

	public function utilisateur()
	{
		if (isset($_SESSION['id'])) {
			return true;
		}else{
			return false;
		}
	}

	public function main(){

			session_start();
			global $errors;
			
			$method = $_SERVER['REQUEST_METHOD'];
			$errors   = array(); 

			$Flash=new Flash;
			echo $Flash->Get('login');

			if ($method=='GET'){
				
			        return '';
			    }
			 
			
			//  se connecter à la BD
				global $bd;
				
				try {
					$dbinfo=$GLOBALS['db'];
	    			$bd = new PDO('mysql:host=localhost;dbname='.$dbinfo["name"], $dbinfo["login"], $dbinfo["password"]);
					$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$bd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);  
				} catch (PDOException $e) {
					echo "Connection failed : ". $e->getMessage();
				}

			//declaration du tableau des erreurs

			

			// Appel de la fonction enregistrer 
			/*if (isset($_POST['connecter'])) {
				connexion("user");
			}
			if (isset($_POST['connecterSocite'])) {
				connexion("emtreprise");
			}*/

			$isuser=$this->connexion();
			#echo "1";
			//enregistrer
			
			// fonction d'affichage d'erreure
			
			
		}

}

$Con=new Con;
$Con->main();
		
#main_connexion();
?>	