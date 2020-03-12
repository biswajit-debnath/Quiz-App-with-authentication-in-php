<?php
	//If session is not logout
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
     <link rel="stylesheet" href="../css/bootstrap.css">
     <link rel="stylesheet" href="../css/bootstrap-grid.css">
     <link rel="stylesheet" href="../css/style.css">
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

	<?php $username=$Username;
	 include('../include/header.php');
	 ?>

	<div class="container mt-lg-5 mt-3">
		<form action="result.php" method="post">
			<?php 
				//Displaying all the questions
				$conn= new mysqli('localhost','root','','quizdb');
				$sql_all_question="Select qid,question from questions;";
				$result_question=$conn->query($sql_all_question);

				if($result_question->num_rows > 0){
					while ($row_question=$result_question->fetch_assoc()) {
						
			?>
			<div class="card ml-auto mr-auto p-md-3 mb-3 col-lg-9 col-md-10" style="background-color: #d3d3d338;">
				<p> <?php 
					echo $row_question['qid'] .".". $row_question['question'];
				?></p>
				<div class="row option pl-md-1">
					<?php
						//Displaying all the options of a the question 
						$sql_all_option="Select aid,answer,a_qid from answers;";
						$result_option=$conn->query($sql_all_option);
						if($result_option->num_rows > 0){
						while ($row_option=$result_option->fetch_assoc()) {
							if($row_option['a_qid']==$row_question['qid']){
					?>
					<label ><?php echo $row_option['answer']?></label>
<!-- 						Name is set to question no. and value is set to answer no. -->
					<input type="radio" name="<?php echo $row_question['qid']; ?>" value="<?php echo $row_option['aid']; ?>">
					<?php }
								}
								}
								else 	{
								echo "0 Result";
								}
					?>
				</div>		
			</div>
			<?php }
				}
				else {
					echo "0 Result";
				}
			?>
			<div class="text-center">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>


	<?php include('../include/footer.php'); 
	?>








    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>