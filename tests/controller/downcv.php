<?php

include('../core/run.php');

function main(){
	session_start();
	$matricule=$_GET['id'];
	echo "cv telecharger";
	function forcerTelechargement($nom, $situation, $poids)
	  {
	    header('Content-Type: application/octet-stream');
	    header('Content-Length: '. $poids);
	    header('Content-disposition: attachment; filename='. $nom);
	    header('Pragma: no-cache');
	    header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
	    header('Expires: 0');
	    readfile($situation);
	    exit();
	  }
	  $method = $_SERVER['REQUEST_METHOD'];

	  if (!isset($_SESSION['id']) or $_SESSION['id']==NULL) {
	      #echo "id non trouver";
	      #var_dump($_SESSION['id']);
	      $Bmsg='vous devez vous connecter pour <br> consulter cette partie  du site  ';
	      $Boostrap=new Boostrap;
	      #echo $Bmsg2=$Boostrap->alert($Bmsg,'danger');
	      FlashInit('login');
	      FlashSet('login',$Boostrap->alert($Bmsg,'danger'));
	      header('location: '. $GLOBALS['urlMap']['login']);
	  }

	try{
	    $dbinfo=$GLOBALS['db'];
	    $pdo = new PDO('mysql:host=localhost;dbname='.$dbinfo["name"], $dbinfo["login"], $dbinfo["password"]);
	    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $pdo->beginTransaction();
	    $req_search = $pdo->prepare("SELECT * FROM user WHERE matricule like ? ");

	    $req_search->execute(array($matricule));
	    
	    $count= $req_search->rowCount();
	    if($count != 0){
	        $recup=$req_search->fetchAll();
	        //var_dump($recup);
	        foreach ($recup as $value) {
	            $nom=$value['nom'];
	            $prenom=$value['prenom'];
	            $sexe=$value['sexe'];
	            $profession=$value['profession'];
	            $email=$value['email'];
	            FlashSet('ProfilName',$nom);
	            
	        }
	        #var_dump([$nom, $prenom, $sexe,$profession,$email]);
	        #echo "ok";
	        $filename='../../model/upload/'.$matricule.'.pdf';
	        FlashSet('cvLocation',$filename);
	        
	        $fileEx=file_exists($filename );
	        #var_dump($fileEx);
	        $downloadCv='';
	        $downloadValid='';

	        if ($fileEx==TRUE) {
	            $downloadCv=$filename;
	            $downloadCv='/meetJobs/tests/controller/cvdownload.php';
	            $downloadValid='download="'.$nom.$prenom.'.pdf"';
	            #FlashSet('home','cv telecgarger avec success');
	            #forcerTelechargement($nom.'.pdf',$filename, filesize($filename));
	        }
	        else{
	            
	            $downloadCv='/meetJobs/tests/controller/cverror.php';
	            #header('location /meetJobs/tests/controller/userProfil.php');

	        }
	    }else{

	        #$args[0]=resultat();
	        FlashSet('home','vous n\' etes pas connecter');
	        echo "vous n'etes pas connecter";

	    }

	   
	    
	    //var_dump($card);
	}
	catch(PDOException $e){
	    echo"Erreur : " . $e->getMessage();
	    exit();
	}

	return array($cvdownload );
}

$args=main();

?>