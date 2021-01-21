<?php

class Mymail
{

	public function set($objet,$nom,$email,$message) 
	{

		#echo "ca marche";
		#mail('amoussougedeon13@gmail.com', 'salut', 'ca marche bien');
		$to = "somebody@example.com";
		$subject = $objet;

		$message = "
		<html>
		<head>
		<title>Sujection depuis gomeetjobs</title>
		</head>
		<body>
		<p> nom : ".$nom."</p>
		<p> email : ".$email." </p>
		<p> message : ".$message." </p>
		</body>
		</html>
		";

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= 'From: <webmaster@example.com>' . "\r\n";
		$headers .= 'Cc: myboss@example.com' . "\r\n";

		mail($to,$subject,$message,$headers);

	}
    
}

#$Mymail= new Mymail;
#$Mymail->set('salut','gedeon','amoussougedeon13@gmail.com','salut le message a bien ete envoyer ');

?>