<?php
session_start();
if(!isset($_SESSION['login']))
header("Location:index.php?err12=1");
$con=mysqli_connect("localhost","root","","webproject") or die("server not found");
//echo $_POST['que1'];




$query="select * from question";
$x=mysqli_query($con,$query) or die("wrong query");
$array=mysqli_fetch_array($x);
$email=$_SESSION['login'];
$query1="select * from result where email='$email'";

$z=mysqli_query($con,$query1) or die("wrong result");
$array2=mysqli_fetch_array($z);
$right=0;
$wrong=0;
$notattempt=0;
for($i=1;$i<=10;$i++)
{
	
if($array2["$i"]==$array['answer'])
		$right++;
	else if($array2["$i"]=="0")
		$notattempt++;
	else if($array2["$i"]!=$array['answer'])
		$wrong++;

$array=mysqli_fetch_array($x);
}

?>

<html>
<head><style>
	/*input[type="radio"]{
  
    height: 20px;
    width:025px;
    background-color: red;
    border-radius: 50%;
    }*/
    .container1 {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container1 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container1 input:checked ~ .checkmark {
  background-color: green;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container1 .checkmark:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}







.checkmark1 {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark1 {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container1 input:checked ~ .checkmark1 {
  background-color: red;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark1:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark1:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container1 .checkmark1:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}








.label{
  display: inline-block;
  margin-bottom: 0.5rem;
}
</style>
 
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="file/bootstrap-4.2.1-dist/css/bootstrap.min.css">
  <script src="file/jquery.min.js"></script>
  <script src="file/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>

 
<title>


	</title>
	</head>

<body>

<div class="container-fluid bg-dark jumbotron shadow-lg text-left bg-dark rounded-0 text-light" style="background-color: black;"  >
	
<div class="row">
	<div class="col-4">
		<form method="post" action="thank.php"> 
<input type="submit" name="logout" class="btn btn-success" style="margin-top: 30px;margin-left: 10px;" value="logout">	</input>
</form>
<h1 style="color:white;"> Result:</h1>
<h4 style="color:white">Total Question: 10</h4>
<h4 style="color:white">Write Question :<?php echo $right;?></h4>
<h4 style="color:white">wrong Question :<?php echo "$wrong"?></h4>
<h4 style="color:white">Not attempted Question :<?php echo $notattempt;?></h4>
	</div>
<div class="col-4">


<h4  style="color:white;padding-top:40px;margin-left: px; "> Hello 	<? echo $_SESSION['name'].", ";?>this is your result</h4>
</div>


</div>

</div>

<div class="container col-md-8 p-3 border shadow-lg">
	<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Instruction</button>
  <div id="demo" class="collapse"><button  type="button" style="height:20px;width:40px;" class="btn btn-success"></button>Write Attempted<br>
  <button  type="button" style="height:20px;width:40px;" class="btn btn-danger"></button>  Wrong Attempted<br>
 <button type="button" style="height:20px;width:40px;" class="btn btn-warning"></button>  Not Attempted
<br><br><br>
 <label class="container1">
	<input type="radio" checked name='<?php echo "$name"?>'><h2>Write Option</h2>
	<span class="checkmark"></span>
	</label>
	<label class="container1">
	<input type="radio" checked name='<?php echo "$name"?>'><h2>Wrong Attempt</h2>
	<span class="checkmark1"></span>
	</label>
</div><br><br><br>

	<?php
$query="select * from question";
$x=mysqli_query($con,$query) or die("wrong query");
while($array=mysqli_fetch_array($x))
{	$index=$array['id'];
	?>
	
	<h5  <?php if($array2[$index]==$array['answer']){ ?>style="background-color: green;padding: 10px;border:1px solid gray;"; <?php } ?> <?php if($array2[$index]=='0'){ ?>style="background-color: yellow;padding: 10px;border:5px solid yellow;" <?php } ?> 
	<?php  if($array2[$index]!=$array['answer']){ ?>style="background-color: red;padding: 10px;border:1px solid red;" <?php } ?>>Q.<?php echo $array['id']." ".$array['question']; ?> </h5>
	<?php $name=$array['id'];?>
	<label class="container1">
	<input type="radio" disabled id="<?php echo $array['option1'];?>" name='<?php echo "$name"?>'><?php echo $array['option1'];?><br>
	<span class="checkmark"></span>
	</label>
	<label class="container1">
	<input type="radio" disabled id="<?php echo $array['option2'];?>" name='<?php echo "$name"?>'><?php echo $array['option2'];?><br>
	<span class="checkmark"></span>
	</label>
	<label class="container1">
	<input type="radio" disabled id="<?php echo $array['option3'];?>" name='<?php echo "$name"?>'><?php echo $array['option3'];?><br>
	<span class="checkmark"></span>
	</label>
	<label class="container1">
	<input type="radio" disabled id="<?php echo $array['option4'];?>" name='<?php echo "$name"?>'><?php echo $array['option4'];?><br>
		<span class="checkmark"></span>
	</label>
 


<?php
}	
?>
	</div>


</body>
</html>
<script>
	$(document).ready(function(){
		<?php
	$query="select * from question";
	$x=mysqli_query($con,$query) or die("wrong query");
	$array=mysqli_fetch_array($x);
	$query1= "select * from result where email='$email'";
	$z=mysqli_query($con,$query1) or die("wrong result");
	$array2=mysqli_fetch_array($z);
	
		$answer=$array2['1'];
		$id=$array['option1'];
		if($array['answer']=='1'){
		?>
	
		$("[id='Console class']").attr("disabled",false);
		$("[id='Console class']").prop("checked",true);
	

<?php }
	if($array['answer']=='2'){
		?>
	
		$("[id='Scanner Class']").attr("disabled",false);
		$("[id='Scanner Class']").prop("checked",true);
	

<?php }
if($array['answer']=='3'){
		?>
	
		$("[id='FileInputStream class']").attr("disabled",false);
		$("[id='FileInputStream class']").prop("checked",true);
		

<?php }
if($array['answer']=='4'){
		?>
		$
		$("[id='PrintStream class']").attr("disabled",false);
		$("[id='PrintStream class']").prop("checked",true);
	

<?php }

 ?>

 //for question 2nd
<?php 
	$array=mysqli_fetch_array($x);
	$answer=$array2['2'];
		$id=$array['option1'];
		if($array['answer']=='1'){
		?>
	
		$("[id='3']").attr("disabled",false);
		$("[id='3']").prop("checked",true);
		$("[id='3']").addClass("rad-container");

<?php }
	if($array['answer']=='2'){
		?>
	
		$("[id='1']").attr("disabled",false);
		$("[id='1']").prop("checked",true);
		$("[id='1']").addClass("rad-container");

<?php }
if($array['answer']=='3'){
		?>
	
		$("[id='4']").attr("disabled",false);
		$("[id='4']").prop("checked",true);
		$("[id='4']").addClass("rad-container");

<?php }
if($array['answer']=='4'){
		?>
		$
		$("[id='2']").attr("disabled",false);
		$("[id='2']").prop("checked",true);
		$("[id='2']").addClass("rad-container");

<?php }

 ?>

//question 3

<?php 
	$array=mysqli_fetch_array($x);
	$answer=$array2['3'];
		$id=$array['option1'];
		if($array['answer']=='1'){
		?>
	
		$("[id='private']").attr("disabled",false);
		$("[id='private']").prop("checked",true);
		$("[id='private']").addClass("rad-container");

<?php }
	if($array['answer']=='2'){
		?>
	
		$("[id='Public']").attr("disabled",false);
		$("[id='Public']").prop("checked",true);
		$("[id='Public']").addClass("rad-container");

<?php }
if($array['answer']=='3'){
		?>
	
		$("[id='Protected']").attr("disabled",false);
		$("[id='Protected']").prop("checked",true);
		$("[id='Protected']").addClass("rad-container");

<?php }
if($array['answer']=='4'){
		?>
		$
		$("[id='None of the above']").attr("disabled",false);
		$("[id='None of the above']").prop("checked",true);
		$("[id='None of the above']").addClass("rad-container");

<?php }

 ?>

//question 4

<?php 
	$array=mysqli_fetch_array($x);
	$answer=$array2['4'];
		$id=$array['option1'];
		if($array['answer']=='1'){
		?>
	
		$("[id='copy()']").attr("disabled",false);
		$("[id='copy()']").prop("checked",true);
		$("[id='copy()']").addClass("rad-container");

<?php }
	if($array['answer']=='2'){
		?>
	
		$("[id='Objectcopy()']").attr("disabled",false);
		$("[id='Objectcopy()']").prop("checked",true);
		$("[id='Objectcopy()']").addClass("rad-container");

<?php }
if($array['answer']=='3'){
		?>
	
		$("[id=' Objectclone()']").attr("disabled",false);
		$("[id=' Objectclone()']").prop("checked",true);
		$("[id=' Objectclone()']").addClass("rad-container");

<?php }
if($array['answer']=='4'){
		?>
		$
		$("[id='Clone()']").attr("disabled",false);
		$("[id='Clone()']").prop("checked",true);
		$("[id='Clone()']").addClass("rad-container");

<?php }

 ?>


 //question 5

<?php 
	$array=mysqli_fetch_array($x);
	$answer=$array2['5'];
		$id=$array['option1'];
		if($array['answer']=='1'){
		?>
	
		$("[id='Constructor overloading']").attr("disabled",false);
		$("[id='Constructor overloading']").prop("checked",true);
		$("[id='Constructor overloading']").addClass("rad-container");

<?php }
	if($array['answer']=='2'){
		?>
	
		$("[id='Method overloading']").attr("disabled",false);
		$("[id='Method overloading']").prop("checked",true);
		$("[id='Method overloading']").addClass("rad-container");

<?php }
if($array['answer']=='3'){
		?>
	
		$("[id='Operator overloading']").attr("disabled",false);
		$("[id='Operator overloading']").prop("checked",true);
		$("[id='Operator overloading']").addClass("rad-container");

<?php }
if($array['answer']=='4'){
		?>
		$
		$("[id='None of the above']").attr("disabled",false);
		$("[id='None of the above']").prop("checked",true);
		$("[id='None of the above']").addClass("rad-container");

<?php }

 ?>

//question 6

<?php 
	$array=mysqli_fetch_array($x);
	$answer=$array2['6'];
		$id=$array['option1'];
		if($array['answer']=='1'){
		?>
	
		$("[id='javax.servlet']").attr("disabled",false);
		$("[id='javax.servlet']").prop("checked",true);
		$("[id='javax.servlet']").addClass("rad-container");

<?php }
	if($array['answer']=='2'){
		?>
	
		$("[id='javax.servlet.http']").attr("disabled",false);
		$("[id='javax.servlet.http']").prop("checked",true);
		$("[id='javax.servlet.http']").addClass("rad-container");

<?php }
if($array['answer']=='3'){
		?>
	
		$("[id='Both A & B']").attr("disabled",false);
		$("[id='Both A & B']").prop("checked",true);
		$("[id='Both A & B']").addClass("rad-container");

<?php }
if($array['answer']=='4'){
		?>
		$
		$("[id='None of the above']").attr("disabled",false);
		$("[id='None of the above']").prop("checked",true);
		$("[id='None of the above']").addClass("rad-container");

<?php }

 ?>

//question 7

<?php 
	$array=mysqli_fetch_array($x);
	$answer=$array2['7'];
		$id=$array['option1'];
		if($array['answer']=='1'){
		?>
	
		$("[id='MVC2 Pattern']").attr("disabled",false);
		$("[id='MVC2 Pattern']").prop("checked",true);
		$("[id='MVC2 Pattern']").addClass("rad-container");

<?php }
	if($array['answer']=='2'){
		?>
	
		$("[id='Bridge Pattern']").attr("disabled",false);
		$("[id='Bridge Pattern']").prop("checked",true);
		$("[id='Bridge Pattern']").addClass("rad-container");

<?php }
if($array['answer']=='3'){
		?>
	
		$("[id='MVC 1 Pattern']").attr("disabled",false);
		$("[id='MVC 1 Pattern']").prop("checked",true);
		$("[id='MVC 1 Pattern']").addClass("rad-container");

<?php }
if($array['answer']=='4'){
		?>
		$
		$("[id='None of the following']").attr("disabled",false);
		$("[id='None of the following']").prop("checked",true);
		$("[id='None of the following']").addClass("rad-container");

<?php }

 ?>

//question 8

<?php 
	$array=mysqli_fetch_array($x);
	$answer=$array2['8'];
		$id=$array['option1'];
		if($array['answer']=='1'){
		?>
	
		$("[id='Server']").attr("disabled",false);
		$("[id='Server']").prop("checked",true);
		$("[id='Server']").addClass("rad-container");

<?php }
	if($array['answer']=='2'){
		?>
	
		$("[id='Client']").attr("disabled",false);
		$("[id='Client']").prop("checked",true);
		$("[id='Client']").addClass("rad-container");

<?php }
if($array['answer']=='3'){
		?>
	
		$("[id='Both A & B']").attr("disabled",false);
		$("[id='Both A & B']").prop("checked",true);
		$("[id='Both A & B']").addClass("rad-container");

<?php }
if($array['answer']=='4'){
		?>
		$
		$("[id='none']").attr("disabled",false);
		$("[id='none']").prop("checked",true);
		$("[id='none']").addClass("rad-container");

<?php }

 ?>

//question 9

<?php 
	$array=mysqli_fetch_array($x);
	$answer=$array2['9'];
		$id=$array['option1'];
		if($array['answer']=='1'){
		?>
	
		$("[id='jsp:useBean']").attr("disabled",false);
		$("[id='jsp:useBean']").prop("checked",true);
		$("[id='jsp:useBean']").addClass("rad-container");

<?php }
	if($array['answer']=='2'){
		?>
	
		$("[id='jsp:setProperty']").attr("disabled",false);
		$("[id='jsp:setProperty']").prop("checked",true);
		$("[id='jsp:setProperty']").addClass("rad-container");

<?php }
if($array['answer']=='3'){
		?>
	
		$("[id='B jsp:getProperty']").attr("disabled",false);
		$("[id='B jsp:getProperty']").prop("checked",true);
		$("[id='B jsp:getProperty']").addClass("rad-container");

<?php }
if($array['answer']=='4'){
		?>
		$
		$("[id='Both B & C']").attr("disabled",false);
		$("[id='Both B & C']").prop("checked",true);
		$("[id='Both B & C']").addClass("rad-container");

<?php }

 ?>

//question 10

<?php 
	$array=mysqli_fetch_array($x);
	$answer=$array2['10'];
		$id=$array['option1'];
		if($array['answer']=='1'){
		?>
	
		$("[id='SMALLINT']").attr("disabled",false);
		$("[id='SMALLINT']").prop("checked",true);
		$("[id='SMALLINT']").addClass("rad-container");

<?php }
	if($array['answer']=='2'){
		?>
	
		$("[id='BIGINT']").attr("disabled",false);
		$("[id='BIGINT']").prop("checked",true);
		$("[id='BIGINT']").addClass("rad-container");

<?php }
if($array['answer']=='3'){
		?>
	
		$("[id='TINYINT']").attr("disabled",false);
		$("[id='TINYINT']").prop("checked",true);
		$("[id='TINYINT']").addClass("rad-container");

<?php }
if($array['answer']=='4'){
		?>
		$
		$("[id='INTEGER5']").attr("disabled",false);
		$("[id='INTEGER5']").prop("checked",true);
		$("[id='INTEGER5']").addClass("rad-container");

<?php }

 ?>




});


</script>
