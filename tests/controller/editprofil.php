<?php
include_once('../core/run.php');
session_start();
function main_editprofil(){
    $matricule=$_SESSION['id'];
    echo FlashGet('editprofil');

    $method = $_SERVER['REQUEST_METHOD'];

    function updateUserInfo(){

        $certification=$_POST['certification'];
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $sexe=$_POST['sexe'];
        $profession=$_POST['profession'];
        $siteWeb=$_POST['siteWeb'];
        $facebook=$_POST['facebook'];
        $competences=$_POST['competences'];
        $photo='defaut';

        #var_dump($_POST);
        $all=[$nom,$prenom,$sexe,$profession,$competences];
        $isvalide=TRUE;
        /*$all.foreach ($variable as $value) {
            if(isempty($value)){
                $isvalide=FALSE;
            }
        }*/
        for ($i=0; $i <count($all) ; $i++) { 
            
            if(empty($all[$i])){
                $isvalide=FALSE;
            }

        }

        if ($isvalide==TRUE) {
            #FlashSet('editprofil','mis a jpur effectuer');
             try{
                $matricule=$_SESSION['id'];
                $dbinfo2=$GLOBALS['db'];
                $pdo2 = new PDO('mysql:host=localhost;dbname='.$dbinfo2["name"], $dbinfo2["login"], $dbinfo2["password"]);
                $pdo2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $pdo2->beginTransaction();
                #$req_search2 = $pdo2->prepare("UPDATE info SET (certification,siteweb,facebook,competence,nom,prenom,sexe,profession,photo) VALUES (?,?,?,?,?,?,?,?,?) WHERE matricule like ? ");
                $req_search2 = $pdo2->prepare("UPDATE info SET nom=?,certification=?,siteweb=?,facebook=?,competence=?,prenom=?,sexe=?,profession=?,photo=?  WHERE matricule=?");

                #$req_search2->execute(array($certification,$siteWeb,$facebook,$competences,$nom,$prenom,$sexe,$profession,$photo,$matricule));
                $req_search2->execute(array($nom,$certification,$siteWeb,$facebook,$competences,$prenom,$sexe,$profession,$photo,$matricule));
                #$req_search2->commit(); 

                echo "table mis a jour!!!";
                var_dump($matricule);

            }
                catch(PDOException $e){
                echo"Erreur : " . $e->getMessage();
                exit();
            }


            echo "mis a jour effectuer";
            $bootstrap=new Boostrap;
            FlashSet('userProfil',$bootstrap->alert2('La mis a jour effectuer','success'));
            #header('location:/meetJobs/tests/view/userProfil.php');
        }
        else if($isvalide==FALSE){
            echo "mis a jour echouer";
            $bootstrap=new Boostrap;
            FlashSet('editprofil',$bootstrap->alert2('veillez renseigner les champs','danger'));
            header('location:/meetJobs/tests/view/editprofil.php');
        }

        #$Upload=new upload;
        #$Upload->img();

    }

    if ($method=="POST") {
        updateUserInfo();
    }

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
    else{
        #echo "id trouver";
    }

    #var_dump($method);


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
    }

    #include('../view/userProfil.php');
    return [$nom,$prenom,$sexe,$profession,$email,$downloadCv,$downloadValid];
    }

[$nom,$prenom,$sexe,$profession,$email,$downloadCv,$downloadValid]=main_editprofil();

?>