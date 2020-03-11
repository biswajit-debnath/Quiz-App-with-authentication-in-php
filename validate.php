
<?php 

	session_start();
	//Db connection
	$conn= new mysqli("localhost","root","","quizdb");

	$username= $_POST["username"];
	
	$_SESSION['username'];
	header('location:home.php');
?>
