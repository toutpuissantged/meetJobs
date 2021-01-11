<?php
	session_start();
	$_SESSION['Falsh']=[];
	header('location: /meetJobs/tests/view/home.php');
	exit();    
?>
