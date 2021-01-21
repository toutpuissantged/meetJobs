<?php
include('../core/run.php');

function main(){
	session_start();
	$id=$_GET['id'];
	$jobsid=$_GET['jobsid'];
	$socid=$_SESSION['id'];
	echo $id;
	$dbinfo=$GLOBALS['db'];

	try{
		$pdo = new PDO('mysql:host=localhost;dbname='.$dbinfo["name"], $dbinfo["login"], $dbinfo["password"]);
	    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $pdo->beginTransaction();
	    $sql2=" SELECT * FROM jobs WHERE id=?";
	    $myexe2=$pdo->prepare($sql2);

	    $myexe2->execute(array($jobsid)); 
	    #var_dump($myexe2,$temp3) ; 
	    $oldpostule=$myexe2->fetchAll();
	    #var_dump($oldpostule);
	    $oldid=$oldpostule[0]['postuleid'];
	    #$newid=$oldid.' '.$myid;
	    $oldidtab=explode(' ',$oldid);
	    #var_dump($oldidtab);
	    $curjobs=$oldpostule[0];
	    $newtab=array();
	     for ($i2=0; $i2 <count($oldidtab) ; $i2++) { 
	    	$value=$oldidtab[$i2];
	    	if ($value==$id) {
	    		echo "cath";
	    	}
	    	else{
	    		array_push($newtab,strval($value));
	    	}
	    }

	    #var_dump($newtab,$oldidtab);

	    $sql="UPDATE jobs SET postuleid=? WHERE id=?"; 
        $myexe=$pdo->prepare($sql); 
        #$myexe->execute(array($newtab,$jobsid)); 
        $myexe->execute(array('',$jobsid));        
        $pdo->commit(); 
        #echo "mis a jour reussi";
        $flash=new Flash;
        $msg='<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                  <strong>Candidat suprimer</strong> si vous avez fait cette manipulation involontairement veillez contacter le service technique pour recuperer 
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
        $flash->Set('showpostule',$msg);

        header('location: /meetJobs/tests/view/showpostule.php?jobsid='.$jobsid);
	 }
	 catch(PDOException $e){
        echo"Erreur : " . $e->getMessage();
        exit();
    }

}

main();
?>