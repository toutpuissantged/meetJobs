<?php
include('../core/run.php');

function main(){
	session_start();

	$jobsid=$_GET['jobsid'];
	$myid=$_SESSION['id'];
	$dbinfo=$GLOBALS['db'];
	$flash=new Flash;
	echo $flash->Get('showpostule');

	function cvexsite($id,$nom,$prenom){

		$matricule=$id;
		$filename='../../model/upload/'.$matricule.'.pdf';
        FlashSet('cvLocation',$filename);
        
        $fileEx=file_exists($filename );
        #var_dump($fileEx);
        $downloadCv='';
        $downloadValid='';

        if ($fileEx==TRUE) {
            $downloadCv=$filename;
            $downloadCv='/meetJobs/tests/controller/cvdownloadnew.php?userid='.$matricule;
            $downloadValid='download="'.$nom.$prenom.'.pdf"';
            $isexiste=true;
            #FlashSet('home','cv telecgarger avec success');
            #forcerTelechargement($nom.'.pdf',$filename, filesize($filename));
        }
        else{
            
            $downloadCv='/meetJobs/tests/controller/cverrornew.php';
            $isexiste=false;
            #header('location /meetJobs/tests/controller/userProfil.php');

        }

        return [$isexiste,$downloadCv];

	}

	function htmlRend($img,$userid){

    	return '
    		<div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info">
                    <img class="card-img-top" src="https://picsum.photos/200/150/?random">
                    <div class="card-block">
                        <figure class="profile profile-inline">
                            <img src="https://picsum.photos/200/150/?random" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title">Tawshif Ahsan Khan</h4>
                        <div class="card-text">
                            Tawshif is a web designer living in Bangladesh.
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-info btn-sm">Follow</button>
                    </div>
                </div>
            </div>
    	';

    }

    function cardrender($img,$name,$surname,$id,$email,$profession){
    	$funget=cvexsite($id,$name,$surname);
    	$cvurl=$funget[1];
    	$flash =new Flash;
    	$flash->Set('cvdnew',[$name,$surname]) ;
    	$popoverui='
    		
			<button class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="le candidat n\'a pas de cv "><i class="fas fa-file-download"></i></button>
    	';
    	$downcvui='
    		<a href="'.$cvurl.'" class="btn btn-danger" title="telecharger le cv du candidat"><i class="fas fa-file-download"></i></a>
    	';

    	if ($funget[0]==true) {
    		$render=$downcvui;
    	}
    	else{
    		$render=$popoverui;
    	}

    	return '
    		<div class="card mx-3  my-3" style="width: 18rem;">
			  <img class="card-img-top" src="../../model/upload/default-avatar.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title" style=" text-transform: uppercase; ">'.$name.' <em style=" text-transform: lowercase; "> '.$surname.'</em></h5>
			    <p class="card-text">est '.$profession.' <br> '.$email.'</p>
			    <a href="/meetJobs/tests/view/showuserprofil.php?query='.$id.'" class="btn btn-primary" title="voir le profil du candidat"><i class="fas fa-user" ></i> voir  </a> 
			    <a href="#" class="btn btn-primary" title="valider le candidat"><i class="fas fa-check"></i></a>
			    <a href="#" class="btn btn-danger " title="suprimer le candidat" data-toggle="modal" data-target="#Modal'.$id.'"><i class="fas fa-trash-alt"></i></a>
			    '.$render.'
	  		  </div>
		    </div>
		    <!-- Modal -->
			<div class="modal fade" id="Modal'.$id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title text-danger" id="exampleModalLongTitle"><i class="fas fa-exclamation-triangle mx-1"></i>Attention</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        Voulez vous vraiment suprimer la candidature de <span style=" text-transform: uppercase; ">'.$name.'</span> '.$surname.' ? <br> cet action est ireversible <br> 
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
			        <a href="/meetJobs/tests/controller/deletecandidat.php?id='.$id.'&jobsid='
			    .$_GET["jobsid"].'" class="btn btn-primary">Suprimer</a>
			      </div>
			    </div>
			  </div>
			</div>
    	';
    }
	#var_dump($_GET,$_SESSION);
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
	    $newid=$oldid.' '.$myid;
	    $oldidtab=explode(' ',$oldid);
	    #var_dump($oldidtab);
	    $curjobs=$oldpostule[0];
	    $oldlen=count($oldidtab);
	    $sql3=" SELECT * FROM user";
	    $myexe3=$pdo->prepare($sql3);

	    $myexe3->execute(array()); 
	    #var_dump($myexe2,$temp3) ; 
	    $alluser=$myexe3->fetchAll();
	   # var_dump($alluser);
	    $allcard='';

	    for ($i2=0; $i2 <count($oldidtab) ; $i2++) { 
	    	$value=$oldidtab[$i2];

	    	for ($i=0; $i <count($alluser) ; $i++) { 
		    	if ($alluser[$i]['matricule']==$value) {
		    		$allcard.=cardrender(0,$alluser[$i]['nom'],$alluser[$i]['prenom'],$alluser[$i]['matricule'],$alluser[$i]['email'],$alluser[$i]['profession']);
		    		break;
		    	}
	   		}

	    }
	    
	    if (strlen($allcard)<10) {
	    	$allcard='
	    	<div class="row ">
	    	<div class="col-4">
	    		<img class="" src="../../public/tpg/oups.png" alt="Card image cap" width="300px">
	    		
	    	</div>
	    	<div class="col-8">
	    		<div class="alert alert-warning ml-5 mt-4" role="alert">
				  <h4 class="alert-heading"><i class="fas fa-exclamation-triangle"></i> OUPS !!!! </h4>
				  <h5> vous n\'avez encore pas encore recu de candidature <br> veillez revenir plutard </h5>
				  <hr>
				  <p class="mb-0"><i class="fas fa-exclamation-circle"></i> il se pourait que votre offre soit assez recente ou que vous ne soyez <br> pas assze visible sur le site pour booster votre visibiliter veillez <br> <a href="#" class="font-weight-bold text-info mx-1"><i class="fas fa-lightbulb mx-1"></i> cliquer ici</a> pour souscrire au abonnement premium</p>
				</div>
	    	</div>
	    		
	    	</div>
				
	    	';
	    }

	}
	catch(PDOException $e){
        echo"Erreur : " . $e->getMessage();
    }


    #echo $allcard;
    return [$curjobs,$allcard];
}

$args=main();

?>