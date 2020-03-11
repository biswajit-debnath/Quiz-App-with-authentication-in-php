<?php
	session_start();
	$Username=$_SESSION['username'];
	if(!isset($_SESSION['username'])){
		header('location:login.php');
	}
?>

<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Home</title>
     <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="css/bootstrap-grid.css">
     <link rel="stylesheet" href="css/style.css">
     <style type="text/css">
.option input {
	margin-top: 0.4rem;
	margin-left: 0.2rem; 
}
.option label {
	margin-left: 1.5rem;
}
</style>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<span class="navbar-brand"><?php echo $Username; ?></span>
  		<div class="collapse navbar-collapse" id="navbarNav">
	    	<ul class="navbar-nav m-auto">
	      		<li class="nav-item m-auto">
	        		<span class="nav-link badge-success app-name" style="color: white;">The Quiz App</span>
	      		</li>
	    	</ul>
	    	<ul class="navbar-nav justify-content-end">
	      		<li class="nav-item justify-content-end">
	        		<a class="nav-link" href="logout.php"><button class="btn btn-primary">Logout</button></a>
	      		</li>
	    	</ul>
  		</div>
	</nav>

	<div class="container mt-lg-5 mt-3">
		<div class="card ml-auto mr-auto p-md-3 mb-3 col-lg-9 col-md-10" style="background-color: #d3d3d338;">
			<p> This is the first Demo question please select of the 4 option to answer.</p>
			<div class="row option pl-md-1">
			<label >Option1</label><input type="radio" name="">
			<label >Option1</label><input type="radio" name="">
			<label >Option1</label><input type="radio" name="">	
			<label >Option1</label><input type="radio" name="">
			</div>		
		</div>
		<div class="card ml-auto mr-auto p-md-3 mb-3 col-lg-9 col-md-10" style="background-color: #d3d3d338;">
			<p> This is the Second Demo question please select of the 4 option to answer</p>
			<div class="row option pl-md-1">
			<label >Option1</label><input type="radio" name="">
			<label >Option1</label><input type="radio" name="">
			<label >Option1</label><input type="radio" name="">	
			<label >Option1</label><input type="radio" name="">
			</div>		
		</div>
	</div>











     <script src="js/bootstrap.js"></script>
     <script src="js/bootstrap.bundle.js"></script>
     <script src="js/main.js"></script>
</body>
</html>