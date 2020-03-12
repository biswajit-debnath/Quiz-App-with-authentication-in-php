
<?php 

	session_start();
	$username= $_POST["username"];
	//Db connection
	$conn= new mysqli("localhost","root","","quizdb");

	$username= $_POST["username"];
	
	$_SESSION['username']=$username;
	header('location:home.php');
?>
