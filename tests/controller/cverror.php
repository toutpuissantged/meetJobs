<?php
include('../core/run.php');
session_start();
$bootstrap=new Boostrap;
FlashSet('userProfil',$bootstrap->alert2('le candidat n\'a pas de cv','danger'));
header('location:/meetJobs/tests/view/userProfil.php');

?>
