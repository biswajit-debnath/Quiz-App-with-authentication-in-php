
<?php 

	session_start();
	//Db connection
	$conn= new mysqli("localhost","root","","quizdb");

	$email= $_POST["email"];
	$password= $_POST["password"];
	$username= $_POST["username"];
	$address= $_POST["address"];
	$city= $_POST["city"];
	$state= $_POST["state"];

	//Storing results
	$sql = "Insert Into users(email,passw,username,address,city,state) Values('$email','$password','$username','$address','$city','$state');";
	$conn->query($sql);

	$_SESSION['username']= $username;
	header('location:../view/home.php');
?>
