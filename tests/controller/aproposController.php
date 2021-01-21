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

function Connected(){

#####  pour verifier si l'utilistuer est connecter ########

        $profilurl='';

        if (isset($_SESSION['user']['acount'])) {
            $acount=$_SESSION['user']['acount'];
            if ($acount=='particulier') {
                $profilurl=$GLOBALS['urlMap']['userprofil'];
            }
            else if ($acount=='entreprise') {
                $profilurl=$GLOBALS['urlMap']['entreprofil'];
            }
        }

        $NotConnectMenu='<li class="menu-item-has-children page_item_has_children">
        <a href="javascript:void(0);">
            Compte
            <em>Gerer Votre Compte</em>
        </a>

        <ul class="sub-menu">
        <li><a href="'.$GLOBALS['urlMap']['login'].'">Se connecter</a></li>
        <li><a href="'.$GLOBALS['urlMap']['regE'].'">Creer compte entreprise</a></li>
            <li><a href="'.$GLOBALS['urlMap']['regP'].'">Creer compte particulier</a></li>
        </ul>
        </li>';
        $ConnectMenu='<li class="menu-item-has-children page_item_has_children">
        <a href="javascript:void(0);">
            Vous etes Connecter
            <em>Gerer Votre Compte</em>
        </a>

        <ul class="sub-menu">
        <li><a href="'.$profilurl.'">Profil</a></li>
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

function quiSommeNous(){
    $quiSommeNous ='	<div class="section-block">
    <div class="container">
    <a href="'.$GLOBALS['urlMap']['home'].'" class="h3 text-center alert alert-info my-5"> Retourner a l\'acueille </a>
    <br><br>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-12">
                <img src="../../public/assets/public/images/2488817.jpg" class="rounded-border shadow-primary" alt="">
            </div>
            <div class="col-md-6 col-sm-6 col-12">
                <div class="pl-30-md">
                    <div class="section-heading text-left mt-5">
                        <h3 class="semi-bold font-size-32">QUI SOMMES NOUS ?</h3>
                        <div class="section-heading-line line-thin"></div>
                        <div class="text-content">
                            <p>Reso-job est un site de recrutement mettant en relation les salariés et les candidats . Notre plateforme est dédiée uniquement à la recherche d’emploi. Nous vous  proposons différentes offres d’emplois: CDD, CDI, Intérim , stage . Les candidats peuvent ​y poster leur CV et leur lettre de motivation . Ils peuvent également enregistrer certaines annonces qui peuvent les intéresser. Pour postuler, il suffit de répondre à une offre particulière. Notre interface accompagne également les entreprises dans leur processus de recrutement , vous pouvez bénéficier de notre accompagnement sur mesure. 
 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Info section END-->
        <!--************************************
                Our Professionals Start
        *************************************-->
        <section class="jf-haslayout jf-sectionspace">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="jf-sectionhead">
                            <h2 class="uppercase" style="font-size: 1em">
                                <i class="lnr lnr-users"></i>
                                Notre Equipe
                            </h2>
                        </div>
                    </div>

                    <div class="jf-ourprofessionals justify-items-center">
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 float-left">
                                <div class="jf-ourprofessional">
                                    <div class="jf-professionaldetail">
                                        <figure class="jf-companyimg" style="background: url(\'../../public/assets/public/storage/authorsCovers/fvtR6FdUIPY8CpccPsK4qN5c0ViXPPla4FLEyjNT.png\'); background-repeat: no-repeat;background-size: cover; background-position: center; border-radius: 100%">
                                        </figure>
                                        <div class="jf-professionalcontent">
                                            <div class="jf-professionalname">

                                                <h3>
                                                    <a href="https://projects.daoscorporation.com/odile-job/public/blog/authors/samuel-dao/VolejRejNm" target="_blank" style="text-transform: none;">
                                                        BAKOLA Odile
                                                    </a>
                                                </h3>
                                                <span>Directrice Générale de Go-Meet job<br>et Responsable de Go-Meetjob</span>
                                            </div>
                                            <span class="jf-totalviews">
												<i class="lnr lnr-envelope"></i><em>************</em>
											</span>
                                            <a class="jf-btn noneTextTransform uppercase" href="https://projects.daoscorporation.com/odile-job/public/blog/authors/samuel-dao/VolejRejNm" target="_blank">Voir le profile</a>
                                        </div>
                                    </div>
                                    <ul class="jf-professionalinfo">
                                        <li><i class="lnr lnr-eye"></i><span>0</span></li>
                                        <li><i class="lnr lnr-phone"></i><span>+33758069869</span></li>
                                        <li><i class="lnr lnr-heart"></i><span>0</span></li>
                                    </ul>
                                </div>
                            </div>
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 float-left">
                                <div class="jf-ourprofessional">
                                    <div class="jf-professionaldetail">
                                        <figure class="jf-companyimg" style="background: url(\'../../public/assets/public/storage/authorsCovers/fvtR6FdUIPY8CpccPsK4qN5c0ViXPPla4FLEyjNT.png\'); background-repeat: no-repeat;background-size: cover; background-position: center; border-radius: 100%">
                                        </figure>
                                        <div class="jf-professionalcontent">
                                            <div class="jf-professionalname">

                                                <h3>
                                                    <a href="https://projects.daoscorporation.com/odile-job/public/blog/authors/alain-edorh/Wpmbk5ezJn" target="_blank" style="text-transform: none;">
                                                        DANDO Elias
                                                    </a>
                                                </h3>
                                                <span>Responsabe opérationel et <br>Résentant de Go-Meetjob </span>
                                            </div>
                                            <span class="jf-totalviews">
												<i class="lnr lnr-envelope"></i><em>*************</em>
											</span>
                                            <a class="jf-btn noneTextTransform uppercase" href="https://projects.daoscorporation.com/odile-job/public/blog/authors/alain-edorh/Wpmbk5ezJn" target="_blank">Voir le profile</a>
                                        </div>
                                    </div>
                                    <ul class="jf-professionalinfo">
                                        <li><i class="lnr lnr-eye"></i><span>0</span></li>
                                        <li><i class="lnr lnr-phone"></i><span>+22893446256</span></li>
                                        <li><i class="lnr lnr-heart"></i><span>0</span></li>
                                    </ul>
                                </div>
                            </div>
                                                    <!-- <div class="col-12 col-sm-12 col-md-12 col-lg-6 float-left">
                                <div class="jf-ourprofessional">
                                    <div class="jf-professionaldetail">
                                        <figure class="jf-companyimg" style="background: url(\'../../public/assets/public/storage/authorsCovers/jCDxGqPs4gkFhjZOzE9Q4ESt0KgwC83ptWgz0zZ9.png\'); background-repeat: no-repeat;background-size: cover; background-position: center; border-radius: 100%">
                                        </figure>
                                        <div class="jf-professionalcontent">
                                            <div class="jf-professionalname">

                                                <h3>
                                                    <a href="https://projects.daoscorporation.com/odile-job/public/blog/authors/blaise-agbeko/Opnel5aKBz" target="_blank" style="text-transform: none;">
                                                        Blaise AGBEKO
                                                    </a>
                                                </h3>
                                                <span>Comptable</span>
                                            </div>
                                            <span class="jf-totalviews">
												<i class="lnr lnr-envelope"></i><em>blaise@mail.com</em>
											</span>
                                            <a class="jf-btn noneTextTransform uppercase" href="https://projects.daoscorporation.com/odile-job/public/blog/authors/blaise-agbeko/Opnel5aKBz" target="_blank">Voir le profile</a>
                                        </div>
                                    </div>
                                    <ul class="jf-professionalinfo">
                                        <li><i class="lnr lnr-eye"></i><span>0</span></li>
                                        <li><i class="lnr lnr-phone"></i><span>90999868</span></li>
                                        <li><i class="lnr lnr-heart"></i><span>0</span></li>
                                    </ul>
                                </div>
                            </div>
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 float-left">
                                <div class="jf-ourprofessional">
                                    <div class="jf-professionaldetail">
                                        <figure class="jf-companyimg" style="background: url(\'../../public/assets/public/storage/authorsCovers/fvtR6FdUIPY8CpccPsK4qN5c0ViXPPla4FLEyjNT.png\'); background-repeat: no-repeat;background-size: cover; background-position: center; border-radius: 100%">
                                        </figure>
                                        <div class="jf-professionalcontent">
                                            <div class="jf-professionalname">

                                                <h3>
                                                    <a href="https://projects.daoscorporation.com/odile-job/public/blog/authors/elias-dando/wMvbmOeYAl" target="_blank" style="text-transform: none;">
                                                        Elias DANDO
                                                    </a>
                                                </h3>
                                                <span>Comptable</span>
                                            </div>
                                            <span class="jf-totalviews">
												<i class="lnr lnr-envelope"></i><em>eliasdando@mail.com</em>
											</span>
                                            <a class="jf-btn noneTextTransform uppercase" href="https://projects.daoscorporation.com/odile-job/public/blog/authors/elias-dando/wMvbmOeYAl" target="_blank">Voir le profile</a>
                                        </div>
                                    </div>
                                    <ul class="jf-professionalinfo">
                                        <li><i class="lnr lnr-eye"></i><span>0</span></li>
                                        <li><i class="lnr lnr-phone"></i><span>90999868</span></li>
                                        <li><i class="lnr lnr-heart"></i><span>0</span></li>
                                    </ul>
                                </div>
                            </div>
                                            </div> -->
                </div>
            </div>
        </section>';
return $quiSommeNous;
}

$args[0]=quiSommeNous();
//$args[0]=htmlRend($contrat,$post,$localisation,$description,$niveau,$temps,$salaireMin,$salaireMax,$img);

$args[1]=Connected();

//$render->renderView('home',$args);
include('../view/a_propos.php')

?>