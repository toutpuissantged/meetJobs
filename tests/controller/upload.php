<?php

function main(){
    include('../core/run.php');
    session_start();
    #$_SESSION['id']=10;

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

    else if ($_SESSION['user']['acount']!='particulier'){
        $Bmsg='Seul les comptes particulier<br>  peuvent deposer  un cv';
        $Boostrap=new Boostrap;
        #echo $Bmsg2=$Boostrap->alert($Bmsg,'danger');
        FlashInit('login');
        FlashSet('login',$Boostrap->alert($Bmsg,'danger'));
        header('location: '. $GLOBALS['urlMap']['login']);
    }

    if ($_SERVER['REQUEST_METHOD']=='GET'){
        return '';
    };

    $args=[];
    $isupload=false;
    $state=0;
    $nomOrigine = $_FILES['files']['name'];

    if (empty($_FILES['files']['name'])) return '<div class=" my-alert"><div class=" p-3 alert alert-danger role="alert"> vous n\'avez choisi aucun fichier <br> <a href="'.$GLOBALS['urlMap']['home'].'" class="alert-link"> allez vers la page d\'acueille  </a> </div></div>';

    $elementsChemin = pathinfo($nomOrigine);
    $extensionFichier = $elementsChemin['extension'];
    $extensionsAutorisees = array("pdf", "docx");
    if (!(in_array($extensionFichier, $extensionsAutorisees))) {
        //echo "Le fichier n'a pas l'extension attendue";
        $state=1;
    } else {    
        // Copie dans le repertoire du script avec un nom
        // incluant l'heure a la seconde pres 
        $repertoireDestination = dirname(__FILE__)."/../../model/upload/";
        //$nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;
        $nomDestination = $_SESSION['id']?$_SESSION['id'].".".$extensionFichier:'last'.".".$extensionFichier;

        if (move_uploaded_file($_FILES["files"]["tmp_name"], 
                                         $repertoireDestination.$nomDestination)) {
            "Le fichier temporaire ".$_FILES["files"]["tmp_name"].
                    " a été déplacé vers ".$repertoireDestination.$nomDestination;
            $isupload=true;
            $state=2;
            
        } else {
            "Le fichier n'a pas été uploadé (trop gros ?) ou ".
                    "Le déplacement du fichier temporaire a échoué".
                    " vérifiez l'existence du répertoire ".$repertoireDestination;
            $isupload=false;
            $state=3;
            
        }
        
    }
    //echo 'upload terminer';

    function validator($state){
        if ($state){
            if($state==1){
                $html=" Le format du cv n'est pas <br> correct ! veillez ressayer <br> <a href='".$GLOBALS['urlMap']['home']."' class=\"alert-link\"> allez vers la page d'acueille  </a>";
                $type='danger';
            }
            else if ($state==2){
                $html=' le cv a ete uploder avec success  <br> <a href="'.$GLOBALS['urlMap']['home'].'" class="alert-link"> allez vers la page d\'acueille  </a>';
                $type='success';
            }
            else if ($state==3){
                $html="Le fichier n'a pas été uploadé (trop gros ?)";
                $type='danger';
            }
            else{
                $html=" une erreur est survenue ! veillez reessayer";
                $type='danger';
            }  
            
            return '<div class=" my-alert"><div class=" p-3 alert alert-'.$type.'" role="alert">
            '.$html.'
          </div></div>';
        }
        
    }

    return validator($state);
}

$args[0]=main();

//echo $state;
#include_once('../view/upload.php');
//$render->renderView('upload',$args);

?>