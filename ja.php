<?php
$question=$_POST['question'];
$option1=$_POST['option1'];
$option2=$_POST['option2'];
$option3=$_POST['option3'];
$option4=$_POST['option4'];
$answer=$_POST['answer'];

$con=mysqli_connect("localhost","root","","webproject") or die("server not found");
$query= "insert into question set question='$question', option1='$option1', option2='$option2', option3='$option3', option4='$option4', answer='$answer' ";
mysqli_query($con,$query) or die("wrong query");


?>