<?php

include('../core/run.php');

function main (){
	session_start();

   # $Flash =new Flash;
    #echo $Flash->Get('showjobs');
    /* echo '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
              <strong>Holy guacamole!</strong> You should check in on some of those fields below.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
    */
    #var_dump($Flash->Get('showjobs'));

	function htmlRend($img,$post,$temp_soid,$temp_jobsid){

    	return '
    		<div class="col-md-3 col-sm-6 mb-4">
		      <a href="/meetJobs/tests/view/showjobs.php?id='.$temp_soid.'&jobs='.$temp_jobsid.'">
		            <img class="img-fluid" src="../../model/upload/'.$img.'" alt="" width="300px" height="200px">
		          </a>
		          <h5 class="text-center"> '.$post.'</h5>
		    </div>
    	';

    }

    function postulez($temp_soid,$temp_jobsid)
    {
        return '<a href="/meetJobs/tests/controller/postulez.php?id='.$temp_soid.'&jobs='.$temp_jobsid.'" title="pour postulez vous n\'avez qu\'a cliquer et nous nous ocupons du reste" class="btn btn-info">Postulez </a>';
    }

    function notconnect($temp_soid,$temp_jobsid){
        return '<a href="/meetJobs/tests/controller/notconnect.php?id='.$temp_soid.'&jobs='.$temp_jobsid.'" title="pour postulez vous n\'avez qu\'a cliquer et nous nous ocupons du reste" class="btn btn-info">Postulez </a>';
    }

    function checkpostule($pdo,$myid,$jobsid){

        $deja=false;
        #$pdo->beginTransaction();
        $sql2=" SELECT * FROM jobs WHERE id=?";
        $myexe2=$pdo->prepare($sql2);

        $myexe2->execute(array($jobsid)); 
        #var_dump($myexe2,$temp3) ; 
        $oldpostule=$myexe2->fetchAll();
        #var_dump($oldpostule);
        $oldid=$oldpostule[0]['postuleid'];
        #$newid=$oldid.' '.$myid;
        $oldidtab=explode(' ',$oldid);
       # var_dump($oldidtab);
        #echo 'myid ='.$myid.'<br>';

        #exit();

        for ($i=0; $i <count($oldidtab) ; $i++) { 
            if ($myid==$oldidtab[$i]) {
               $deja=true;
               #echo "1 cather";
               return $deja;
            }
        }
        #echo "2 cather";
        return $deja;

    }

	$myid=$_GET['id'];
    $jobsid=$_GET['jobs'];
    $curjobs=array();
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
        /*$sql2="SELECT * FROM jobs WHERE id=".$jobsid;
        $query2=$pdo->query($sql2);
        $recup2=$query->fetchAll();
        $sociname=$recup2['name'];
        var_dump($recup2);
        */
        $sociname=$recup[count($recup)-1]['name'];
        #var_dump($recup);
        //var_dump($recup);
        for($i=0;$i<$recuplen;$i++) {
            $value=$recup[$recuplen-($i+1)];
            if ($value['id']==$jobsid) {
                $curjobs=[
                    'id'=>$value['id'],
                    'contrat'=>$value['contrat'],
                    'post'=>$value['post'],
                    'localisation'=>$value['localisation'],
                    'description'=>$value['description'],
                    'niveau'=>$value['niveau'],
                    'temps'=>$value['temps'],
                    'salaireMin'=>$value['salaireMin'],
                    'salaireMax'=>$value['salaireMax'],
                    'image'=>$value['image'],
                    'societeid'=>$value['societeid']

                ];

            }
            
            
            $img=$value['image'];
            $post=$value['post'];
            $temp_soid=$value['societeid'];
            $temp_jobsid=$value['id'];
            $myCard=htmlRend($img,$post,$temp_soid,$temp_jobsid);
            $card=$card.$myCard;

            #break;
        }
        $isconnect=true;
        if (!isset($_SESSION['id'])) {
            $isconnect=false;
            $deja='';
        }
        else{
            $deja=checkpostule($pdo,$_SESSION['id'],$jobsid);
        #var_dump($deja);
        }
        
        $args[0]=$card;
        //var_dump($card);
    }
    catch(PDOException $e){
        echo"Erreur : " . $e->getMessage();
    }
     if (!isset($_SESSION['user']['acount']) or !isset($_SESSION['id']) ) {
            $postuleui='<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">
                  Postulez
                </button>
            ';
        }
    else if ($deja==true) {
            $postuleui='<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Ils semblerait que vous ayez deja postulez pour cet offre">
  Postulez
</button>
';
    }
   else if ($_SESSION['user']['acount']=='particulier') {
      $postuleui=postulez($curjobs['societeid'],$curjobs['id']);
   }
   else{
     $postuleui='';
   }
   return array($card,$sociname,$curjobs,$postuleui,$_GET['id']);

}

$args=main();

?>