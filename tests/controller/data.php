<?php

try{
    $pdo = new PDO('mysql:host=localhost;dbname=recrutement;port=3308', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->beginTransaction();
    $sql="SELECT * FROM jobs";
    $query=$pdo->query($sql);
    $recup=$query->fetchAll();
    var_dump($recup);
    /*
    $sql="INSERT INTO client (username,password,id) VALUES('hugo','h7',2)";  
    $pdo->exec($sql);              
    $pdo->commit(); 
    $sql2="SELECT username FROM client ";
    $query=$pdo->query($sql2);
    $recup=$query->fetchAll();
    echo '</pre>';
    //print_r($recup);
    //var_dump($recup[1]['username']);
    var_dump($recup);
    echo '</pre>';
    */
}
catch(PDOException $e){
    echo"Erreur : " . $e->getMessage();
}

//$req = $pdo->query($sql); 
//while($row = $req->fetch()) {    
//echo '<a href="membre-'.$row['id'].'.html">'.$row['pseudo'].'</a><br/>';     }  
//$row = $req->fetch();
//$req->closeCursor();
//var_dump($row) ;
//echo 'valeur ajouter';



