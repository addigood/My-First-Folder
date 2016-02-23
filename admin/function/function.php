<?php 
define('SECRET_KEY', "ddgjgjgjgjhgjh");
function login($username,$password){
$data=$username.SECRET_KEY;
$data2=$password.SECRET_KEY;
$server=$_SERVER["SERVER_NAME"];
$token1 = hash('sha256', $data.$server);
$token2 = hash('sha256', $data2.$server);
	
	
	
}

?>

