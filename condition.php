<?php
session_start();
if(!isset($_SESSION['login']))
header("Location:signup.php?err12=1");


	
?>

<html lang="en">
<head>
<style>

    
    </style>
  <title>online exam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="file/bootstrap-4.2.1-dist/css/bootstrap.min.css">
  <script src="file/jquery.min.js"></script>
  <script src="file/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
  <script src="file/myjquery.js"></script>
</head>

<body>

<div class="container-fluid jumbotron bg-dark ;">
	<div class="row">
		<div class="col-3">
		<h1 style="color: white;margin-top: 20px;">welcome <?php echo $_SESSION['name']; ?></h1>

		</div>
<div class="col-6">
	 <p class="text-primary" style="font-size: 30px; text-align: center; margin-top:40px;">Online Quize</p>
</div>
<div class="col-3">
	<form method="post" action="logout.php"> 
<input type="submit" name="logout" class="btn btn-success" style="margin-top: 30px;" value="logout">	</input>
</form>
</div>

</div></div>
<div class="container">
  <div class="card-deck">
    <div class="card bg-primary">
      <div class="card-body text-center">
        <h1 class="card-text" style="color: black;text-align:left">Instruction for taking Online Exam</h1>
        <h4 class="card-text" style="color: white;text-align:left;">1. This is a multiple choice Test and contains 10 question to be answered in 10 minutes.</h4>
        <h4 class="card-text" style="color: white;text-align:left;">2. Each Question have 1 marks for right answer.</h4>
        <h4 class="card-text" style="color: white;text-align:left;">3. Click the <b>Start Test</b> below to start</h4>
       
       <h4 class="card-text" style="color: white;text-align:left;">4. A question and the possible answers choices appear</h4>

       <h4 class="card-text" style="color: white;text-align:left;">5. you can submit before time. but after submit you cant join Test.</h4>
       <form method="post" action="test.php">
       <input  type="submit" class="btn btn-secondary" value="start Test"></input>
   </form>
      </div>
    </div>
</div>
   

</div>
</body>
</html>