<?php
include('../core/run.php');
session_start();
$matricule=$_SESSION['id'];
echo FlashGet('userProfil');

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
        
        $fileEx=file_exists($filename );
        #var_dump($fileEx);
        $downloadCv='';
        $downloadValid='';

        if ($fileEx==TRUE) {
            $downloadCv=$filename;
            $downloadValid='download="'.$nom.$prenom.'.pdf"';
            #FlashSet('home','cv telecgarger avec success');
            forcerTelechargement($nom.'.pdf',$filename, filesize($filename));
        }
        else{
            FlashSet('userProfil','le candidat n\'a pas de cv');
            $downloadCv='';
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
}

include('../view/userProfil.php');

?>