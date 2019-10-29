<?php


/*if(!isset($_REQUEST['err1']))
  header("Location:index.php?err12=1");
*/
  session_start();
  if(!isset($_SESSION['login']))
    header("Location:index.php?err12=1");
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


<div class="container">
  <div class="jumbotron">
    <h1 class="text-primary" style="text-align: center">Congratulations You are Successfully signup</h1>      
    <h2 class="text-success" style="text-align:center">Click <a href="index.php"><button type="button" class="btn btn-success">Here</button></a> to Log in</h2>
  </div>
     
</div>
