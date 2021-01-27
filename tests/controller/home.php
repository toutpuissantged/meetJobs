<?php

function main(){

######## fonction principale ################

    include('../core/run.php');
    session_start();

    #FlashInit('home');
    #echo FlashGet('home');
    #Boostrap.test();

    $html='
    <div class="my-alert">
        <div class=" p-3 alert alert-success role="alert">
            heureux de vous revoir 
        </div>  
    </div>
    ';
    #echo $html;

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


    function htmlRend($contrat,$post,$localisation,$description,$niveau,$temps,$salaireMin,$salaireMax,$img,$jobsid,$societeid)
    {

        ##### pour faire le rendu html ############

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

        $maxdesc=35;

        if (strlen($description)>$maxdesc) {
            $newdescription='';
            for ($i=0; $i <$maxdesc ; $i++) { 
                $newdescription.=$description[$i];

            }
            $description=$newdescription.'...';
            #exit();
        }

        return '
        <div class="col-md-6 jf-featurejobholder" style="">
        <div class="jf-featurejob">
            <figure class="jf-companyimg" style="background: url(\'../../model/upload/'.$img.'\'); background-repeat: no-repeat;background-size: cover; background-position: center;">
            </figure>
            <div class="jf-companycontent">
                <div class="jf-companyhead">
                    <a class="jf-btnjobtag jf-fulltimejob" class="jf-btnjobtag jf-internship" href="/meetJobs/tests/view/showjobs.php?id='.$societeid.'&jobs='.$jobsid.'"  style="background-color: '.$contratColor.'">'.$contractText.'</a>
                    <div class="jf-rightarea">
                        <a class="jf-tagfeature">0</a>
                        <a class="jf-btnlike jf-btnliked"><i class="fa fa-heart-o"></i></a>
                    </div>
                </div>
                <div class="jf-companyname">
                    <h3><a href="/meetJobs/tests/view/showjobs.php?id='.$societeid.'&jobs='.$jobsid.'" >'.$post.'</a></h3>
                    <span style=" text-transform: uppercase; ">'.$localisation.'</span>
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

    try{
        $dbinfo=$GLOBALS['db'];
        $pdo = new PDO('mysql:host=localhost;dbname='.$dbinfo["name"], $dbinfo["login"], $dbinfo["password"]);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->beginTransaction();
        $sql="SELECT * FROM jobs";
        $query=$pdo->query($sql);
        $recup=$query->fetchAll();
        $recuplen=count($recup);
        $maxjobs=4;
        global $showlink;
        $showlink=TRUE;

        if (isset($_GET['jobLimite'])) {
            #echo $_GET['jobLimite'];
            $maxjobs=$recuplen+1;
            $showlink=FALSE;

        }
        //var_dump($recup);
        for($i=0;$i<$recuplen;$i++) {
            if ($i>=$maxjobs) {
                break;
            }
            $value=$recup[$recuplen-($i+1)];
            $contrat=$value['contrat'];
            $post=$value['post'];
            $localisation=$value['localisation'];
            $description=$value['description'];
            $niveau=$value['niveau'];
            $temps=$value['temps'];
            $salaireMin=$value['salaireMin'];
            $salaireMax=$value['salaireMax'];
            $img=$value['image'];
            $jobsid=$value['id'];
            $societeid=$value['societeid'];

            $myCard=htmlRend($contrat,$post,$localisation,$description,$niveau,$temps,$salaireMin,$salaireMax,$img,$jobsid,$societeid);
            $card=$card.$myCard;
            #break;
        }

       

        function trie($pdo){
            global $showlink;
            $showlink=FALSE;
            $card="";
            $tri=$_GET['tri'];
            $ville=['lome','atakpame','sokode','kara','dapaong'];
            $contrat=['TempsPlein','TempsPartiel','CDI','CDD','Stage','Freelance'];
            if ($tri=='ville') {
                $data=$ville;
                $dbindex='localisation';
                $msg="Jobs Situer a ";
                

            }
            else if ($tri=='contrat') {
                $data=$contrat;
                $dbindex="contrat";
                $msg=" contrat de type ";
                
            }


            for ($i=0; $i <count($data) ; $i++) { 
                $value2=$data[$i];
                #echo $value2."\n";
                $curtitle="<br><h2 class='bg-dark p-3 col-12' style='' width='100%'>".$msg.$value2."</h2> <br>";
                $sql="SELECT * FROM jobs WHERE ".$dbindex."='".$value2."'";
                #echo $sql;
                $query=$pdo->query($sql);
                $recup=$query->fetchAll();
                $recuplen=count($recup);
                if ($recuplen>=1) {
                    $card=$card.$curtitle;
                }
                #var_dump($recup);
                for ($i2=0; $i2 <$recuplen ; $i2++) { 

                    $value=$recup[$recuplen-($i2+1)];
                    $contrat=$value['contrat'];
                    $post=$value['post'];
                    $localisation=$value['localisation'];
                    $description=$value['description'];
                    $niveau=$value['niveau'];
                    $temps=$value['temps'];
                    $salaireMin=$value['salaireMin'];
                    $salaireMax=$value['salaireMax'];
                    $img=$value['image'];
                    $jobsid=$value['id'];
                    $societeid=$value['societeid'];

                    $myCard=htmlRend($contrat,$post,$localisation,$description,$niveau,$temps,$salaireMin,$salaireMax,$img,$jobsid,$societeid);
                    $card=$card.$myCard;
                            
                }

                if ($recuplen%2!=0) {
                    $emptyCard=' <div class="col-md-6" style="" height="200px"><h3>.</h3></div>';
                }
                    
                else{
                    $emptyCard='<br>';
                }
                $card=$card.$emptyCard;
                
            }
            
            #$card='';
            return $card;
            #exit();

        }

        if (isset($_GET['tri'])) {
            #echo "methode tri pris";
            $card=trie($pdo);
        }

        $args[0]=$card;
        //var_dump($card);
    }
    catch(PDOException $e){
        echo"Erreur : " . $e->getMessage();
        exit();
    }

    return [$card,'',$html];
};


$args=main();

//$render->renderView('home',$args);
#include_once('../view/home.php');

?>