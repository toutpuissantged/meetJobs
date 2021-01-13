<?php

include('../core/run.php');
session_start();
$matricule=$_SESSION['id'];

$name=FlashGet('userProfil');
echo $name;
$filename=FlashGet('cvLocation');


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
  
  forcerTelechargement($name.'.pdf', '../../model/upload/'.$matricule.'.pdf', filesize($filename));