<?php

$GLOBALS['db']=[
    'name'=>'recrutement',
    'login'=>'root',
    'password'=>''

];

$GLOBALS['url']=[
	'domaine'=>'/',
	'floderName'=>'meetJobs'
];

$GLOBALS['url']=[
	'complet'=>$GLOBALS['url']['domaine'].$GLOBALS['url']['floderName']
];

include('url.php');