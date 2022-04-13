<?php
/* config */
require './app/config/config.php';

# Uncomment the below code to access the system just passing the token code on start
/*
$token = 'sN3392-ksDj87-09slmc';
if($_GET['token']==$token){
	$_SESSION['token'] = $token;
	header('location:'.BASE_PATH);
}

if($_SESSION['token']!=$token){
	session_destroy();
	die('Not authorized.');
}
*/

/* datasource */
require './app/config/datasource.php';


Router::initialize ();
Router::addRoute ( 'home', 'index' );

Engine::initialize ( Router::getRoute () );
Engine::run ();
