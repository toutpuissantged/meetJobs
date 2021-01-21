<?php

include('../core/run.php');

function main (){

    session_start();

    $method = $_SERVER['REQUEST_METHOD'];


    //var_dump($Login);

    /*if ($isconected) {
        echo 'redirection';
       $render->redirectView('/login');
    }
    */

    if (!isset($_SESSION['id']) or $_SESSION['id']==NULL) {
        #echo "id non trouver";
        #var_dump($_SESSION['id']);
        $Bmsg='vous devez vous connecter pour effectuer cette action ';
        $Boostrap=new Boostrap;
        #echo $Bmsg2=$Boostrap->alert($Bmsg,'danger');
        FlashInit('login');
        FlashSet('login',$Boostrap->alert($Bmsg,'danger'));
        header('location: '. $GLOBALS['urlMap']['login']);
    }
    else if ($_SESSION['user']['acount']!='entreprise'){
        $Bmsg='Seul les comptes entreprise<br>  peuvent publier des annonces';
        $Boostrap=new Boostrap;
        #echo $Bmsg2=$Boostrap->alert($Bmsg,'danger');
        FlashInit('login');
        FlashSet('login',$Boostrap->alert($Bmsg,'danger'));
        header('location: '. $GLOBALS['urlMap']['login']);
    }
    else{
        #echo "id trouver";
    }

    if ($method=='GET'){
        return '';
    }

    
    #$AcountType=$_SESSION['type'];
    #$Login=$_SESSION['login'];
    #$isconected=$_SESSION['isconected'];

    $contrat=$_POST['contrat'];
    $post=$_POST['post'];
    $localisation=$_POST['localisation'];
    $description=$_POST['description'];
    $niveau=$_POST['niveau'];
    $temps=$_POST['expire'];
    $salaireMin=$_POST['salaireMin'];
    $salaireMax=$_POST['salaireMax'];
    #$img=$_POST['img'];
    $is_valide=TRUE;
    $salaireIsValid=FALSE;
    $err_table=[];
    $err_html='';
    $image='default.png';
    //$name=$_SESSION['name'];
    $name='DCN';
    $dbinfo=$GLOBALS['db'];
    #var_dump($_FILES['img']['name']);
    if ( !empty($_FILES['img']['name'])) {
        $isupload=false;
        $state=0;
        $nomOrigine = $_FILES['img']['name'];
        $elementsChemin = pathinfo($nomOrigine);
        #var_dump($elementsChemin);
        $extensionFichier = $elementsChemin['extension'];
        $extensionsAutorisees = array("jpg", "png","sql");
        if (!(in_array($extensionFichier, $extensionsAutorisees))) {
             "Le fichier n'a pas l'extension attendue";
            $state=1;
        } else {    
             //Copie dans le repertoire du script avec un nom
            // incluant l'heure a la seconde pres 
            $repertoireDestination = dirname(__FILE__)."/../../model/upload/";
            $nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;
            //$nomDestination = $_SESSION['login'].".".$extensionFichier;

            if (move_uploaded_file($_FILES["img"]["tmp_name"], 
                                             $repertoireDestination.$nomDestination)) {
               "Le fichier temporaire ".$_FILES["img"]["tmp_name"].
                        " a été déplacé vers ".$repertoireDestination.$nomDestination;
                $isupload=true;
                $state=2;
                $image=$nomDestination;
                
            } else {
                 "Le fichier n'a pas été uploadé (trop gros ?) ou ".
                        "Le déplacement du fichier temporaire a échoué".
                        " vérifiez l'existence du répertoire ".$repertoireDestination;
                $isupload=false;
                $state=3;
                
            }
            
        }
        #echo "photo trouver";
    }


    else{
        #echo "il n 'y a pas de photo";
    }

    $table=[$contrat,$post,$temps,$localisation,$description,$niveau,$salaireMin,$salaireMax];
    #var_dump($table);

    foreach ($table as $key => $value) {
        if (empty($value)){
            $is_valide=FALSE;
            $error_msg=" les champs ne peuvent etre vide ";
            array_push($err_table,$error_msg);
            exit();
            break;
        } ;
        
    };

    $salaireMax=intval($salaireMax);
    $salaireMin=intval($salaireMin);


    if ($salaireMin!=0 and $salaireMax!=0) {
        //echo 'format du salaire correct';
        $salaireIsValid=TRUE;
    }
    else{
        //echo 'salaire error';
        $err_msg='le salaire doit etre en valeur numerique ';
        array_push($err_table,$error_msg);
    }

    if ($salaireIsValid) {
        if ($salaireMax<$salaireMin) {
            $salaireIsValid=FALSE;
            $err_msg2='le salaire maximal doit etre superieur au minimal ';
            array_push($err_table,$error_msg2);
        }
    }


    if ($is_valide) {
        
         //echo 'le formulaire est corectement remplie';
         $err_msg=' l\'offre d\'emploie a ete ajouter avec success ';
        $html='<div class=" my-alert"><div class=" alert alert-success text-center p-3" role="alert">
        '.$err_msg.' <a href="'.$GLOBALS['urlMap']['home'].'" class="alert-link"> retourner a l\'acueille </a>
        </div></div>';
        $args[0]=$html;
      try{
            $pdo = new PDO('mysql:host=localhost;dbname='.$dbinfo["name"], $dbinfo["login"], $dbinfo["password"]);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->beginTransaction();
            $sql2="SELECT * FROM emtreprise WHERE matricule like ?";
            $myexe2=$pdo->prepare($sql2);
            $myexe2->execute(array($_SESSION['id'])); 
            $myinfo=$myexe2->fetch();
            #var_dump($myinfo); 
            $societeid=$myinfo['matricule'];
            $name=$myinfo['nom'];  
            
            //$sql="INSERT INTO jobs (contrat,post,localisation,description,temps,niveau,salaireMin,salaireMax) 
            //VALUES($contrat,$post,$localisation,$description,$temps,$niveau,$salaireMin,$salaireMax)";  
            //$pdo->exec($sql);       
            $sql="INSERT INTO jobs (contrat,post,localisation,description,temps,niveau,salaireMin,salaireMax,image,name,societeid) VALUES(?,?,?,?,?,?,?,?,?,?,?)"; 
            $myexe=$pdo->prepare($sql); 
            $myexe->execute(array($contrat,$post,$localisation,$description,$temps,$niveau,$salaireMin,$salaireMax,$image,$name,$societeid));        
            $pdo->commit(); 
           # echo "mis a jour reussi";
        }
        catch(PDOException $e){
            echo"Erreur : " . $e->getMessage();
            #exit();
        }

    } 
    else {
        //echo 'non';
        $err_msg='le formulaire ne peut pas etre vide';
        $html='<div class=" my-alert"><div class=" alert alert-danger text-center p-3" role="alert">
        '.$err_msg.'
      </div></div>';
      $args[0]=$html;
    }
    return $args[0];

   

}

$args[0]=main();

#include_once('../view/anonce.php');

?>