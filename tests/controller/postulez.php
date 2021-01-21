<?php
include('../core/run.php');

function main(){

	session_start();
	#var_dump($_GET);
	$dbinfo=$GLOBALS['db'];
    $iscorrect=false;
    $flash=new Flash;

	try{

		$myid=$_SESSION['id'];
		$jobsid=$_GET['jobs'];
        $socid=$_GET['id'];
		#echo $myid,$jobsid;

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
        $newid=$oldid.' '.$myid;
        $oldidtab=explode(' ',$oldid);
        var_dump($oldidtab);
        #exit();

        for ($i=0; $i <count($oldidtab) ; $i++) { 
            if ($myid==$oldidtab[$i]) {
                $msg2='<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                  <strong>Erreur!</strong> vous avez deja postulez pour cet offre
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
                $flash->Set('showjobs',$msg2);
                header('location: /meetJobs/tests/view/showjobs.php?id='.$socid.'&jobs='.$jobsid);
                exit();
                
            }
        }


		$sql="UPDATE jobs SET postuleid=? WHERE id=?"; 
        $myexe=$pdo->prepare($sql); 
        $myexe->execute(array($newid,$jobsid));        
        $pdo->commit(); 
        echo "mis a jour reussi";
        
        $msg='<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                  <strong>OUI!</strong> votre demande de candidature a ete envoyer a l\'entreprise
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
        $flash->Set('showjobs',$msg);

        header('location: /meetJobs/tests/view/showjobs.php?id='.$socid.'&jobs='.$jobsid);

        }

        catch(PDOException $e){
            echo"Erreur : " . $e->getMessage();
            exit();
        }

}

main();

?>