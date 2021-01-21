<?php

######### le schema est ici  ##################

$complet=$GLOBALS['url']['complet'];

$GLOBALS['urlMap']=[

##########   view url ##################

	'home'=>$complet.'/tests/view/home.php',
	'annonce'=>$complet.'/tests/view/anonce.php',
	'upload'=>$complet.'/tests/view/upload.php',
	'userprofil'=>$complet.'/tests/view/userProfil.php',
	'entreprofil'=>$complet.'/tests/view/entreProfil.php',


#########  william url #################

	'login'=>$complet.'/tests/william/log2.php',
	'regE'=>$complet.'/tests/william/registerSoci.php',
	'regP'=>$complet.'/tests/william/register.php',

########  controller url ###############

	'logout'=>$complet.'/tests/controller/logout.php',
	'search'=>$complet.'/tests/controller/search.php'

];



########## code core   ################

#for ($i=0;$i<=count($url);$i++) $url[i]=$GLOBALS['url']['complet'].$url[i];

#$url.foreach ($url as $key => $value) $url[$key]==$GLOBALS['url']['complet'].$url[$value];


