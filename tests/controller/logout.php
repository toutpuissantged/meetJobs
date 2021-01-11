<?php
include_once('../env/global.php');

session_start();
$_SESSION['id']=NULL;

header('location: '.$GLOBALS['urlMap']['home']);
