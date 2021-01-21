<?php

include('../core/run.php');

function main (){
	session_start();

	function htmlRend($img,$curjobsid,$post,$id){

    	return '
    		<div class="col-md-3 col-sm-6 mb-4">
		      <a href="/meetJobs/tests/view/showjobs.php?id='.$id.'&jobs='.$curjobsid.'">
		            <img class="img-fluid" src="../../model/upload/'.$img.'" alt="" width="250px" style="max-width: 250px; max-height: 250px" height="250px">
		          </a>
		          <h5 class="text-center"> '.$post.'</h5>
		    </div>
    	';
        /*return '<div class="card" style="width: 18rem;">
        <a href="/meetJobs/tests/view/showpostule.php?jobsid='.$curjobsid.'">
  <img class="card-img-top" src="../../model/upload/'.$img.'" alt="Card image cap" width="250px" style="max-width: 250px; max-height: 250px" height="250px">
  </a>
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
  </div>
</div>
';*/

    }


	$myid=$_GET['id'];
	#echo $myid;
	$card='';
	$myCard='';
	try{
        $dbinfo=$GLOBALS['db'];
        $pdo = new PDO('mysql:host=localhost;dbname='.$dbinfo["name"], $dbinfo["login"], $dbinfo["password"]);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->beginTransaction();
        $sql="SELECT * FROM jobs WHERE societeid=".$myid;
        $query=$pdo->query($sql);
        $recup=$query->fetchAll();
        $recuplen=count($recup);
        #var_dump($recup);
        //var_dump($recup);
        for($i=0;$i<$recuplen;$i++) {
            $value=$recup[$recuplen-($i+1)];
            #$value=$recup[$i];
            /*$contrat=$value['contrat'];
            $post=$value['post'];
            $localisation=$value['localisation'];
            $description=$value['description'];
            $niveau=$value['niveau'];
            $temps=$value['temps'];
            $salaireMin=$value['salaireMin'];
            $salaireMax=$value['salaireMax'];
            */
            #var_dump($value['image']);
            $curjobsid=$value['id'];
            $img=$value['image'];
            $myCard=htmlRend($img,$curjobsid,$value['post'],$myid);
            $card=$card.$myCard;
            #break;
        }
        $args[0]=$card;
        $sociname=$recup[count($recup)-1]['name'];
        //var_dump($card);
    }
    catch(PDOException $e){
        echo"Erreur : " . $e->getMessage();
    }
    
    return array($card,$sociname);

}

$args=main();

?>