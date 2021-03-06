<?php 
function main_enregistrer(){

}
	   include('../core/run.php');
	   session_start();

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
	$method = $_SERVER['REQUEST_METHOD'];
	if ($method=="GET") {
		$debug=true;
	}
	else 
	{
		enregistrer();
	} 
	
	//enregistrer
	function enregistrer(){
		// definition des varriables globales
		global $bd, $errors, $Nom, $email,$prenom;

		// Affectation de valeurs

		$Nom         =  ($_POST['nom']);
		$prenom      =  ($_POST['prenom']);
		$fonction    =  ($_POST['profession']);
		$sexe        =  ($_POST['sexe']);
		$email       =  ($_POST['email']);
		$password  =  ($_POST['password']);
		$password_2  =  ($_POST['password_2']);
		

		// Contrôle des champs
		if (empty($Nom)) { 
			array_push($errors, "Le nom est obligatoire"); 
		}
		if (empty($prenom)) { 
			array_push($errors, "Le prenom est obligatoire"); 
		}
		if (empty($fonction)) { 
			array_push($errors, "Donnez votre  profession"); 
		}
	
		if (empty($email)) { 
			array_push($errors, " L'email est obligatoire "); 
		}
		if (empty($password)) { 
			array_push($errors, "le mot de passe est obligatoire"); 
		}
		
		if ($password != $password_2) {
			array_push($errors, "Vous devez confirmer le mot de passe");
		}
		if(strlen($Nom)>=20){
			array_push($errors, "le nom ne doit pas dépasser 20 caractère"); 
		}
		if(strlen($prenom)>=30){
			array_push($errors, "le prenom ne doit pas dépasser 30 caractère"); 
		}
		if(strlen($password)>=20){
			array_push($errors, "le nom ne doit pas dépasser 20 caractère"); 
		}
		
		if(strlen($fonction)>=60){
			array_push($errors, "la fonction ne doit pas dépasser 60 caractère"); 
		}
		if(strlen($email)>=50){
			array_push($errors, "le nom ne doit pas dépasser 20 caractère"); 
		}
		$verf_login = $bd->prepare("SELECT * FROM user WHERE email=?");
        $verf_login->execute(array($email));
        $login_exist = $verf_login->rowCount();
        if($login_exist>0){
        	array_push($errors, "Ce email existe déja"); 
        }

		// enregistrer s'il y a pas d'erreur
		if (count($errors) == 0) {
              
              
	         try
				{
	        	   $inserMenbre = $bd -> prepare("INSERT INTO  user (nom,prenom,sexe,profession,email,mpd) VALUES (?,?,?,?,?,?)");
	                    $inserMenbre->execute(array($Nom,$prenom,$sexe,$fonction,$email,$password));

						array_push($errors, "Votre compte a été créer avec succèss"); 
						
				        $Boostrap=new Boostrap;
				        #echo $Bmsg2=$Boostrap->alert($Bmsg,'danger');
				        FlashInit('login');
				        FlashSet('login',$Boostrap->alert("Votre compte a été créer avec succèss",'success'));
						
						header('location: '. $GLOBALS['urlMap']['login']);

						}
						catch(Exception $e)
						{
						die('Erreur : '.$e->getMessage());

			   		}
		}
	}
	
	// fonction d'affichage d'erreure
	function affich_error() {
		global $errors;
		$Boostrap=new Boostrap;
		if (count($errors) > 0 AND count($errors)<4){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $Boostrap->alert($error .'<br>','danger');
				}
			echo '</div>';
		}
		if (count($errors) >= 4 AND count($errors)<10){
			echo '<div class="error">';
					echo $error ="Tous les champs doivent être remplit";
				
			echo '</div>';
		}
	 }
	 
?>	