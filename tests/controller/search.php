<?php

include_once('../env/global.php');
session_start();


$contrat='Stage';
$post='Stage en marketing Commercial - Logex';
$localisation='Bè Klikamé, Atikoumé';
$description='Nous recherchons un (e) Chargé (e) de Clientèle pour mettre en place une stratégie permettant de con...';
$niveau='BAC+2';
$temps='31/12/2020';
$salaireMin='35000';
$salaireMax='50000';
$img='default.png';
$card='';
$args=[];

function Connected2(){
    #####  pour verifier si l'utilistuer est connecter ########

        $NotConnectMenu='<li class="menu-item-has-children page_item_has_children">
        <a href="javascript:void(0);">
            Compte
            <em>Gerer Votre Compte</em>
        </a>

        <ul class="sub-menu">
        <li><a href="'.$GLOBALS['urlMap']['login'].'">Entreprise</a></li>
            <li><a href="'.$GLOBALS['urlMap']['login'].'">Particulier</a></li>
        </ul>
        </li>';
        $ConnectMenu='<li class="menu-item-has-children page_item_has_children">
        <a href="javascript:void(0);">
            Vous etes Connecter
            <em>Gerer Votre Compte</em>
        </a>

        <ul class="sub-menu">
        <li><a href="#">Profil</a></li>
            <li><a href="'.$GLOBALS['urlMap']['logout'].'">Se deconnecter</a></li>
        </ul>
        </li>';
        if(isset($_SESSION['id'])){
        
                //echo ' vous etes connecter';
                return $ConnectMenu;
            }
            else{
                //echo 'vous n\'etes pas connecter';
                return $NotConnectMenu;
            }
        
       
        //echo $id;
}

function htmlRend2($contrat,$post,$localisation,$description,$niveau,$temps,$salaireMin,$salaireMax,$img){

    $jobsTab=[
        'Stage'=>['Stage / Apprentissage / Alternance','#05b6f0'],
        'TempsPlein'=>['Temps Plein','green'],
        'TempsPartiel'=>['Temps Partiel','red'],
        'CDI'=>['CDI/Indéterminé','purple'],
        'CDD'=>['CDD/Intérim/Mission','orange'],
        'Freelance'=>['Indépendant/Freelance','#4705f0']
    ];

    foreach ($jobsTab as $key => $value) {
        if ($contrat==$key){
            $contractText=$value[0];
            $contratColor=$value[1];
        }
    }

    return '
    <div class="col-md-6 jf-featurejobholder" style="">
    <div class="jf-featurejob">
        <figure class="jf-companyimg" style="background: url(\'../../model/upload/'.$img.'\'); background-repeat: no-repeat;background-size: cover; background-position: center;">
        </figure>
        <div class="jf-companycontent">
            <div class="jf-companyhead">
                <a class="jf-btnjobtag jf-fulltimejob" class="jf-btnjobtag jf-internship" href="https://projects.daoscorporation.com/odile-job/public/jobs/contract/stage-apprentissage-alternance/mWZdPwbKgR" target="_blank" style="background-color: '.$contratColor.'">'.$contractText.'</a>
                <div class="jf-rightarea">
                    <a class="jf-tagfeature">0</a>
                    <a class="jf-btnlike jf-btnliked"><i class="fa fa-heart-o"></i></a>
                </div>
            </div>
            <div class="jf-companyname">
                <h3><a href="https://projects.daoscorporation.com/odile-job/public/jobs/marketing/stage-en-marketing-commercial-logex/mWZdPwbKgR" target="_blank">'.$post.'</a></h3>
                <span style=" text-transform: uppercase;">'.$localisation.'</span>
            </div>
            <div class="jf-description">
                <p>'.$description.'</p>
            </div>
        </div>
    </div>
    <ul class="jf-professionalinfo">
        <li><i class="lnr lnr-hourglass"></i><span id="timer-26">00<sup>J</sup>:00<sup>H</sup>:00<sup>M</sup>:00<sup>S</sup></span></li>
        <li><i class="lnr lnr-license"></i><span>'.$niveau.'</span></li>
        <li><i class="lnr lnr-diamond"></i><span>
            <script type="text/javascript">
                document.write(
                    new Intl.NumberFormat(\'de-DE\', {style: \'currency\', currency: \'XOF\'}).format(\''.$salaireMin.'\')
                );
            </script>

            <sup style="font-weight: 700">
                -
            <script type="text/javascript">
                document.write(
                    new Intl.NumberFormat(\'de-DE\', {style: \'currency\', currency: \'XOF\'}).format(\''.$salaireMax.'\')
                );
            </script>
        </sup>
            </span>
        </li>
    </ul>
    </div>

    <script type="text/javascript">
    $(\'#timer-26\').countdown(\'2019-12-31\', function (event) {
        $(this).html(event.strftime(
            \'%D<sup>J</sup>:%H<sup>H</sup>:%M<sup>M</sup>:%S<sup>S</sup>\'
        ));
    });
    </script>
    ';
}


//$args[0]=htmlRend($contrat,$post,$localisation,$description,$niveau,$temps,$salaireMin,$salaireMax,$img);
$jobs = '%'.$_POST['keyWords'].'%';
$location = '%'.$_POST['jobLocation'].'%';
#$jobs = $_POST['keyWords'];
#$location =$_POST['jobLocation'];
#$job='stage';
#$location="lome";
try{
    $dbinfo=$GLOBALS['db'];
    $pdo = new PDO('mysql:host=localhost;dbname='.$dbinfo["name"], $dbinfo["login"], $dbinfo["password"]);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->beginTransaction();
    $req_search = $pdo->prepare("SELECT * FROM jobs WHERE post like ? AND localisation like ? ");

    $req_search->execute(array($jobs , $location));
    
    $count= $req_search->rowCount();
    if($count != 0){
        $recup=$req_search->fetchAll();
        //var_dump($recup);
        foreach ($recup as $value) {
            $contrat=$value['contrat'];
            $post=$value['post'];
            $localisation=$value['localisation'];
            $description=$value['description'];
            $niveau=$value['niveau'];
            $temps=$value['temps'];
            $salaireMin=$value['salaireMin'];
            $salaireMax=$value['salaireMax'];
            $img=$value['image'];
            $myCard=htmlRend2($contrat,$post,$localisation,$description,$niveau,$temps,$salaireMin,$salaireMax,$img);
            $card=$card.$myCard;
        }
        $args[0]=$card;
    }else{
        $args[0]=resultat();
    }

   
    
    //var_dump($card);
}
catch(PDOException $e){
    echo"Erreur : " . $e->getMessage();
}
function resultat(){
    return '
            <center><h3>Désolé Nous n\'avons pas trouvé de résultat à votre recherche</h3></center>
        ';
}

$args[1]=Connected2();


//$render->renderView('home',$args);
include_once('../view/search.php');

?>