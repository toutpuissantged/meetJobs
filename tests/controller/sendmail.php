<?php
include "mail.php";
	
	function mail_main(){
		$objet=$_POST['subject'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['message'];

		$tmail=new Mymail;
		$tmail->set($objet,$name,$email,$msg);
		#echo "ok ca marche"; 
		header(" Location: /") ;  
		exit();
	}

	mail_main();



?>