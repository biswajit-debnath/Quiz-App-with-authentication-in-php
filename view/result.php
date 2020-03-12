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
     <title>Result</title>
     <link rel="stylesheet" href="../css/bootstrap.css">
     <link rel="stylesheet" href="../css/bootstrap-grid.css">
     <link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<?php $username=$Username; 
	include('../include/header.php');?>
	<?php 
	$correct=0;
	$unanswered=0;
	$conn= new mysqli('localhost','root','','quizdb');
	//getting all questions
	$sql_question= "Select qid,q_aid from questions;";
	$result_question=$conn->query($sql_question);
	if($result_question->num_rows > 0){
		while ($row_question=$result_question->fetch_assoc()) {
			$qid=$row_question['qid'];
			//if question id matched with selected option
			if(isset($_POST[$qid]) && $row_question['q_aid']==$_POST[$qid]){
				$correct++;
			}

			else if(!isset($_POST[$qid])){
				$unanswered++;
			}
		}
	}
							
	?>
	<div class="container">
		<div class="card ml-auto mr-auto p-md-3 mb-3 col-lg-9 col-md-10 mt-lg-5" style="background-color: #d3d3d338;">
			<h2>You have answered 
				<?php echo $correct; ?> 
				questions correctly out of 
				<?php echo $result_question->num_rows;?> questions</h2>
			<h1 class="text-
			<?php if($unanswered== $result_question->num_rows) 
					echo "danger"; 
				  else if(($result_question->num_rows/$correct)>2) 
				  	echo "danger"; 
				  else echo "success"; ?>
				  ">Score is : <?php echo $correct; ?> </h1>
			
			<?php if($unanswered>0){?>
				<div class="row ml-2 text-primary">
					<span class="card bg-warning mr-3 p-1">
						<?php echo $unanswered?> unanswered</span>
						<span class="card bg-warning p-1">
							<?php echo $result_question->num_rows-$correct-$unanswered ?> Incorrect</span>
				</div>
			<?php } ?>
			<a href="home.php" class="mt-2 ml-2"><button class="btn btn-success">Retake</button></a>
		</div>
	</div>

	<?php include('../include/footer.php'); ?>



     <script src="../js/bootstrap.js"></script>
     <script src="../js/bootstrap.bundle.js"></script>
     <script src="../js/main.js"></script>
</body>
</html>

