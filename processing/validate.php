
<?php 

	session_start();
	$username= $_POST["username"];
	$password= $_POST["password"];
	//Db connection
	$conn= new mysqli("localhost","root","","quizdb");

	$sql_check="Select username,passw from users where username='$username' AND passw='$password';";
	$result_user= $conn->query($sql_check);
	//If username password is present in the DB
	if($result_user->num_rows > 0 ){

	$username= $_POST["username"];
	$_SESSION['username']=$username;
	header('location:../view/home.php');
	}
	else {
		header('location:../view/login.php');
	}
?>
