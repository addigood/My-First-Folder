<?php 
include('function/function.php');
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	login($username,$password);
}

$str = addslashes("What does 'yolo' mean?");
echo($str);
echo phpversion();




?>

