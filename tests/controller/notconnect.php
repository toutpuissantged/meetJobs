<?php

include('../core/run.php');

function main(){
	$entreid=$_GET['id'];
    $jobsid=$_GET['jobs'];

	$Bmsg='vous devez vous connecter entant <br> que particulier pour postulez ';
    $Boostrap=new Boostrap;
    $Flash=new Flash;
	$Flash->Set('showjobs',$Boostrap->alert($Bmsg,'danger'));
	echo $Boostrap->alert($Bmsg,'danger') ;
	#exit();
    header('location: /meetJobs/tests/view/showjobs.php?id='.$entreid.'&jobs='.$jobsid);
    
}

main();

?>