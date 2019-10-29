<?php
session_start();
if(!isset($_SESSION['login']))
header("Location:index.php?err12=1");
$con=mysqli_connect("localhost","root","","webproject") or die("server not found");
$qno=$_POST['datavalue'];
$query="select * from question where id='$qno' ";
$x=mysqli_query($con,$query);
	$array=mysqli_fetch_array($x);
$_SESSION['qno']="$qno";
	?>
	<html>
	<head>
<style>

    
    </style>
  <title>online exam</title>
  <script>
  $(document).ready(function(){
  $("#previous").click(function(){

    <?php 
    if(isset($_SESSION['qno']) and $_SESSION['qno']=='1'){
   ?>
alert("this is the first question u cant go back");
      <?php } ?>
    <?php 
    if(isset($_SESSION['qno']) and $_SESSION['qno']=='2')
      {?>
        myfunction("1");
      <?php } ?>

       <?php 
    if(isset($_SESSION['qno']) and $_SESSION['qno']=='3')
      {?>
        myfunction("2");
      <?php } ?>

       <?php 
    if(isset($_SESSION['qno']) and $_SESSION['qno']=='4')
      {?>
        myfunction("3");
      <?php } ?>

       <?php 
    if(isset($_SESSION['qno']) and $_SESSION['qno']=='5')
      {?>
        myfunction("4");
      <?php } ?>

       <?php 
    if(isset($_SESSION['qno']) and $_SESSION['qno']=='6')
      {?>
        myfunction("5");
      <?php } ?>

       <?php 
    if(isset($_SESSION['qno']) and $_SESSION['qno']=='7')
      {?>
        myfunction("6");
      <?php } ?>

       <?php 
    if(isset($_SESSION['qno']) and $_SESSION['qno']=='8')
      {?>
        myfunction("7");
      <?php } ?>

       <?php 
    if(isset($_SESSION['qno']) and $_SESSION['qno']=='9')
      {?>
        myfunction("8");
      <?php } ?>

 <?php 
    if(isset($_SESSION['qno']) and $_SESSION['qno']=='10')
      {?>
        myfunction("9");
      <?php } ?>

      });


// for next button
$("#next").click(function(){
  <?php
 if(isset($_SESSION['qno']) and  $_SESSION['qno']=='10') {
  ?>
alert("this is the last question u cant go further");
<?php } ?>

  <?php
 if(isset($_SESSION['qno']) and  $_SESSION['qno']=='1') {
  ?>
myfunction("2");
<?php } 

 if(isset($_SESSION['qno']) and  $_SESSION['qno']=='2') {
  ?>
myfunction("3");
<?php } 

 if(isset($_SESSION['qno']) and  $_SESSION['qno']=='3') {
  ?>
myfunction("4");
<?php } 

 if(isset($_SESSION['qno']) and  $_SESSION['qno']=='4') {
  ?>
myfunction("5");
<?php } 

 if(isset($_SESSION['qno']) and  $_SESSION['qno']=='5') {
  ?>
myfunction("6");
<?php } 

 if(isset($_SESSION['qno']) and  $_SESSION['qno']=='6') {
  ?>
myfunction("7");
<?php } 

 if(isset($_SESSION['qno']) and  $_SESSION['qno']=='7') {
  ?>
myfunction("8");
<?php } 

 if(isset($_SESSION['qno']) and  $_SESSION['qno']=='8') {
  ?>
myfunction("9");
<?php } 

 if(isset($_SESSION['qno']) and  $_SESSION['qno']=='9') {
  ?>
myfunction("10");
<?php } ?>

});//end for next button


});</script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="file/bootstrap-4.2.1-dist/css/bootstrap.min.css">
  <script src="file/jquery.min.js"></script>
  <script src="file/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
  <script src="file/myjquery.js"></script>
</head>
		<form method="post" id="ka"  action="k.php">
   <p>Que. <?php echo $qno." ".$array['question'] ?></p>
  <div class="form-check">
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" ><?php echo $array['option1'];?>
      </label>
    </div><br>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2"><?php echo $array['option2'];?>
      </label>
    </div><br>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optradio" value="option3"><?php echo $array['option3'];?>
      </label>
    </div>	<br>
      <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optradio" value="option4"><?php echo $array['option4'];?>
      </label>
    </div>	<br>
<br>
 <div class="btn-group">
    <button type="button" class="btn btn-primary" id="previous">prev</button>
    <button type="button" class="btn btn-primary" id="next">Next</button>
     </div>
<input type="submit" id="sub" class="btn btn-secondary" style="margin-left: 120px;" value="submit"></button>
 </form>
</html>

