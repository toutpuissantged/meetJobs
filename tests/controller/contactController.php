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


function contact(){
    $contact ='	<div class="section-block grey-bg background-shape-3">
    <div class="container">
    <a href="'.$GLOBALS['urlMap']['home'].'" class="h3 text-center alert alert-success text-dark my-2"> Retournez a l\'accueil </a>
       <div class="row">

           <div class="col-md-6 col-sm-12 col-12">
               <div class="contact-box-place-office">
                   <i class="icon-office-building"></i>
                   <h4>Siège France</h4>
                   <h6>****************(lieu)</h6>
                   <ul>
                       <li><i class="fas fa-envelope-open" style="color:#00CC67;"></i>*******@mail.com</li>
                       <li><i class="fas fa-phone"style="color:#00CC67;"></i>(+123) 123-456-789</li>
                       <li><i class="fas fa-fax" style="color:#00CC67;"></i>(+123) 456-789</li>
                   </ul>
               </div>
           </div>

           <div class="col-md-6 col-sm-12 col-12">
               <div class="contact-box-place-office">
                   <i class="icon-store"></i>
                   <h4>Siège Togo</h4>
                   <h6>****************(lieu)</h6>
                   <ul>
                       <li><i class="fas fa-envelope-open" style="color:#00CC67;"></i>*******@mail.com</li>
                       <li><i class="fas fa-phone" style="color:#00CC67;"></i>(+987) 987-654-321</li>
                       <li><i class="fas fa-fax" style="color:#00CC67;"></i>(+987) 123-456</li>
                   </ul>
               </div>
           </div>
       </div>
   </div>
</div>
<!-- Oficess Boxes Section END -->

<!--Contact Form and Map Section START-->
<div class="section-block grey-bg">
   <div class="container">
       <div class="section-heading text-center">
           <h3 class="semi-bold font-size-30">Nous sommes heureux de pouvoir vous aider</h3>
           <div class="section-heading-line line-thin" style="color:#00CC67;"></div>
           <p><strong>Une question ou suggestion?</strong></br>Laissez Nous un message </p>
       </div>
       <form class="primary-form-2 mt-45" action="" method="POST">
           <div class="row">
               <div class="col-md-10 col-sm-12 col-12 offset-md-1">
                   <div class="row">
                       <div class="col-md-12">
                           <input type="text" name="subject" placeholder="Objet">
                       </div>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="text" name="name" placeholder="Nom">
                       </div>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="email" name="email" placeholder="Email">
                       </div>
                       <div class="col-md-12">
                           <textarea name="message" placeholder="Message"></textarea>
                       </div>
                       <div class="col-md-12">
                           <button type="submit" class="button-md button-primary full-width"><h4 class="text-light">Envoyer</h4></button>
                       </div>
                   </div>
               </div>
           </div>
       </form>
       <!-- Form End -->
   </div>
</div>';
return $contact;
}

$args[0]=contact();
//$args[0]=htmlRend($contrat,$post,$localisation,$description,$niveau,$temps,$salaireMin,$salaireMax,$img);


###  verifier mail ########

include "mail.php";
  
  function mail_main(){
    $objet=$_POST['subject'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['message'];

    $tmail=new Mymail;
    $tmail->set($objet,$name,$email,$msg);
    #echo "ok ca marche"; 
    #header(" Location: /") ;  
    #exit();
  }

  if ($_SERVER['REQUEST_METHOD']=="POST") {
    mail_main();

  }

  ###################
  

//$render->renderView('home',$args);
include_once('../view/contact.php')

?>