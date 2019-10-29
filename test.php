<?php
session_start();
if(!isset($_SESSION['login']))
header("Location:index.php?err12=1");
$con=mysqli_connect("localhost","root","","webproject") or die("server not found");
$query="select * from question";
$x=mysqli_query($con,$query) or die("wrong query");
$_SESSION['prev']="1";
$kapil=$_SESSION['login'];
$query1="insert into result set email='$kapil'";
$y=mysqli_query($con,$query1) or die("your are already done the exam registered with new email to attempt again");




  ?>
<html>
<head>
<style>
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
  background-color: #2196F3;
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

</style>
 
	<script>
   
var totalsecond=600;
var minute=parseInt(totalsecond/60);
var second= parseInt(totalsecond%60);
function checkTime()
{
document.getElementById("timeleft").innerHTML="timeleft: "+minute+"minute "+second+" second";
if(totalsecond<=0){
  alert("Your time is over");
	document.getElementById("ka").submit();
}
else
{
	totalsecond-=1;
	minute=parseInt(totalsecond/60);
	second=parseInt(totalsecond%60);
	setTimeout("checkTime()",1000);


}
}
	setTimeout("checkTime()",1000);
	</script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="file/bootstrap-4.2.1-dist/css/bootstrap.min.css">
  <script src="file/jquery.min.js"></script>
  <script src="file/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>

 
<title>


	</title>






	</head>
<body>
<div class="container-fluid" style="background-color: black; height:110px;" >
	
<div class="row">
	<div class="col-3">
		<form method="post" action="logout.php"> 
<input type="submit" name="logout" class="btn btn-success" style="margin-top: 30px;margin-left: 10px;" value="logout">	</input>
</form>
	</div>
<div class="col-6">


<h4  style="color:white;padding-top:40px;margin-left: px; "> Hello 	<? echo $_SESSION['name'];?>, your exam is going on</h4>
</div>
<div class="col-3">
	  <p class="text-danger" id="timeleft" style="text-align:right;color:white;margin-top:50px;">Time Left: 1 minute</p>
	</div>

</div>

</div>
<div class="container-fluid">
<div class="row">
<div class="col-4">
<br><br>
	 <div class="btn-group">
    <button type="button" class="btn btn-primary" value="1" id="01">1</button>
    <button type="button" class="btn btn-primary" value="2" id="02">2</button>
    <button type="button" class="btn btn-primary" value="3" id="03">3</button>
    <button type="button" class="btn btn-primary" value="4" id="04">4</button>
    <button type="button" class="btn btn-primary" value="5" id="05">05</button>
  </div>
 <div class="btn-group">
    <button type="button" class="btn btn-primary" value="6" id="06">6</button>
    <button type="button" class="btn btn-primary" value="7" id="07">7</button>
    <button type="button" class="btn btn-primary" value="8" id="08">8</button>
    <button type="button" class="btn btn-primary" value="9" id="09">9</button>
    <button type="button" class="btn btn-primary" value="10" id="010">10</button>
  </div>

</div>	

<div class="col-6">
<div class="jumbotron jumbotron-fluid" >
  <div class="container" >
  	<form method="post" id="ka"  action="result1.php">
      <?php 
      while($array=mysqli_fetch_array($x))
      { $qno=$array['id'];
        ?>
        <div id="<?php echo $array['id'];?>">
          
   <p>Que.<?php echo $array['id']." "; ?><?php echo $array['question'] ?></p></li>
   
  <div class="form-check">
      <label class="form-check-label container1">
        <input type="radio" class="form-check-input" id="radio1" name='<?php echo "$qno"?>' value="1" ><?php echo $array['option1'];?>
    <span class="checkmark"></span>
      </label>
    </div><br>
    
    <div class="form-check">
      <label class="form-check-label container1" >
        <input type="radio" class="form-check-input" id="radio2" name='<?php echo "$qno"?>' value="2"><?php echo $array['option2'];?>
      <span class="checkmark"></span>
      </label>
    </div><br>
      
    <div class="form-check">
      <label class="form-check-label container1">
        <input type="radio" class="form-check-input" name='<?php echo "$qno"?>' value="3"><?php echo $array['option3'];?>
      <span class="checkmark"></span>
      </label>
    </div><br>
    
      <div class="form-check">
      <label class="form-check-label container1">
        <input type="radio" class="form-check-input" name='<?php echo "$qno"?>' value="4"><?php echo $array['option4'];?>
   <span class="checkmark"></span>
      </label></div>
    </div><?php } ?></div>	<br>
<br>
 <div class="btn-group">
    <button  type="button" class="btn btn-primary" style="margin-left: 40px;" id="previous">prev</button>
    <button type="button" class="btn btn-primary"  style="margin-left: 40px;" id="next">Next</button>
     </div>
<input type="submit" id="sub" class="btn btn-secondary" style="margin-left: 120px; value="submit"></button>


 </form>

</div>
  </div>
</div>



	</body>
</html>

 <script>

  var x="";
  var question1=0;
  var question2=0;
  var question3=0;
  var question4=0;
  var question5=0;
  var question6=0;
  var question7=0;
  var question8=0;
  var question9=0;
  var question10=0;
$(document).ready(function(){
 $("#2").css("display","none");
   $("#3").css("display","none");
    $("#4").css("display","none");
     $("#5").css("display","none");
      $("#6").css("display","none");
       $("#7").css("display","none");
        $("#8").css("display","none");
         $("#9").css("display","none");
          $("#10").css("display","none");
          $("#previous").css("display","none");
            $("#next").css("display","block");x="1";


$("#01").click(function(){
  $("#2").css("display","none");
   $("#3").css("display","none");
    $("#4").css("display","none");
     $("#5").css("display","none");
      $("#6").css("display","none");
       $("#7").css("display","none");
        $("#8").css("display","none");
         $("#9").css("display","none");
          $("#10").css("display","none");
            $("#1").css("display","block"); 
            $("#previous").css("display","none")
             $("#next").css("display","block");x="1";
});

    $("#02").click(function(){
  $("#1").css("display","none");
   $("#3").css("display","none");
    $("#4").css("display","none");
     $("#5").css("display","none");
      $("#6").css("display","none");
       $("#7").css("display","none");
        $("#8").css("display","none");
         $("#9").css("display","none");
          $("#10").css("display","none");
            $("#2").css("display","block");
            $("#previous").css("display","block");
               $("#next").css("display","block"); x="2";

});


      $("#03").click(function(){
  $("#1").css("display","none");
   $("#2").css("display","none");
    $("#4").css("display","none");
     $("#5").css("display","none");
      $("#6").css("display","none");
       $("#7").css("display","none");
        $("#8").css("display","none");
         $("#9").css("display","none");
          $("#10").css("display","none");
            $("#3").css("display","block");
            $("#previous").css("display","block");
               $("#next").css("display","block");  x="3";
});

      $("#04").click(function(){
  $("#1").css("display","none");
   $("#2").css("display","none");
    $("#3").css("display","none");
     $("#5").css("display","none");
      $("#6").css("display","none");
       $("#7").css("display","none");
        $("#8").css("display","none");
         $("#9").css("display","none");
          $("#10").css("display","none");
            $("#4").css("display","block");
            $("#previous").css("display","block"); 
               $("#next").css("display","block"); x="4";

});
      $("#05").click(function(){
  $("#1").css("display","none");
   $("#2").css("display","none");
    $("#4").css("display","none");
     $("#3").css("display","none");
      $("#6").css("display","none");
       $("#7").css("display","none");
        $("#8").css("display","none");
         $("#9").css("display","none");
          $("#10").css("display","none");
            $("#5").css("display","block");
            $("#previous").css("display","block"); 
               $("#next").css("display","block"); x="5";
});

      $("#06").click(function(){
  $("#1").css("display","none");
   $("#2").css("display","none");
    $("#4").css("display","none");
     $("#5").css("display","none");
      $("#3").css("display","none");
       $("#7").css("display","none");
        $("#8").css("display","none");
         $("#9").css("display","none");
          $("#10").css("display","none");
            $("#6").css("display","block");
            $("#previous").css("display","block");
               $("#next").css("display","block");  x="6";
});

      $("#07").click(function(){
  $("#1").css("display","none");
   $("#2").css("display","none");
    $("#4").css("display","none");
     $("#5").css("display","none");
      $("#6").css("display","none");
       $("#3").css("display","none");
        $("#8").css("display","none");
         $("#9").css("display","none");
          $("#10").css("display","none");
            $("#7").css("display","block");
            $("#previous").css("display","block");
               $("#next").css("display","block");  x="7";
});

      $("#08").click(function(){
  $("#1").css("display","none");
   $("#2").css("display","none");
    $("#4").css("display","none");
     $("#5").css("display","none");
      $("#6").css("display","none");
       $("#7").css("display","none");
        $("#3").css("display","none");
         $("#9").css("display","none");
          $("#10").css("display","none");
            $("#8").css("display","block");
            $("#previous").css("display","block"); 
               $("#next").css("display","block"); x="8";
});

      $("#09").click(function(){
  $("#1").css("display","none");
   $("#2").css("display","none");
    $("#4").css("display","none");
     $("#5").css("display","none");
      $("#6").css("display","none");
       $("#7").css("display","none");
        $("#8").css("display","none");
         $("#3").css("display","none");
          $("#10").css("display","none");
            $("#9").css("display","block");
            $("#previous").css("display","block"); 
               $("#next").css("display","block");x="9";
});
    $("#010").click(function(){
  $("#1").css("display","none");
   $("#2").css("display","none");
    $("#4").css("display","none");
     $("#5").css("display","none");
      $("#6").css("display","none");
       $("#7").css("display","none");
        $("#8").css("display","none");
         $("#3").css("display","none");
          $("#9").css("display","none")
         $("#10").css("display","block");
         $("#previous").css("display","block");
            $("#next").css("display","none"); x="10";
});


$("#previous").click(function(){

if(x=="2"){
  $("#2").css("display","none");
 $("#1").css("display","block");
 $('#previous').css("display","none");
 $('#next').css("display","block");
 x=1;
}
else if(x=="1")
  alert("It is the first question you cant go back");
else if(x=="3"){
  $("#3").css("display","none");
 $("#2").css("display","block");

 $('#next').css("display","block");x=2;
}
else if(x=="4"){
  $("#4").css("display","none");
 $("#3").css("display","block");
  $('#next').css("display","block");x=3;
}
else if(x=="5"){
  $("#5").css("display","none");
 $("#4").css("display","block");
  $('#next').css("display","block");x=4;
}
else if(x=="6"){
  $("#6").css("display","none");
 $("#5").css("display","block");
  $('#next').css("display","block");x=5;
}

else if(x=="7"){
  $("#7").css("display","none");
 $("#6").css("display","block");
  $('#next').css("display","block");x=6;
}
else if(x=="8"){
  $("#8").css("display","none");
 $("#7").css("display","block");
  $('#next').css("display","block");x=7;
}
else if(x=="9"){
  $("#9").css("display","none");
 $("#8").css("display","block");
  $('#next').css("display","block");x=8;
}
else if(x=="10"){
  $("#10").css("display","none");
 $("#9").css("display","block");
  $('#next').css("display","block");x=9;
}

});


$("#next").click(function(){

if(x=="2"){
  $("#2").css("display","none");
 $("#3").css("display","block");
   $('#previous').css("display","block");x=3;
}
else if(x=="10"){
  alert("It is the last question you cant go further");
}
else if(x=="3"){
  $("#3").css("display","none");
 $("#4").css("display","block");
 $('#previous').css("display","block");x=4;
}
else if(x=="4"){
  $("#4").css("display","none");
 $("#5").css("display","block");
 $('#previous').css("display","block");x=5;
}
else if(x=="5"){
  $("#5").css("display","none");
 $("#6").css("display","block");
 $('#previous').css("display","block");x=6;
}
else if(x=="6"){
  $("#6").css("display","none");
 $("#7").css("display","block");
 $('#previous').css("display","block");x=7;
}

else if(x=="7"){
  $("#7").css("display","none");
 $("#8").css("display","block");
 $('#previous').css("display","block");x=8;
}
else if(x=="8"){
  $("#8").css("display","none");
 $("#9").css("display","block");
 $('#previous').css("display","block");x=9;
}
else if(x=="9"){
  $("#9").css("display","none");
 $("#10").css("display","block");
 $('#next').css("display","none");
 $('#previous').css("display","block");
 x=10;
}
else if(x=="1"){
  $("#1").css("display","none");
 $("#2").css("display","block");
 $('#previous').css("display","block");

 x=2;
}

});


//attemped question should be yellow
$("input:radio[name='1']").on("change",function(){
$("#01").css("background-color","gray");
question1= $('input:radio[name="1"]:checked').val();


});
$("input:radio[name='2']").on("change",function(){
$("#02").css("background-color","gray");
question2= $('input:radio[name="2"]:checked').val();
 


});
$("input:radio[name='3']").on("change",function(){
$("#03").css("background-color","gray");
question3= $('input:radio[name="3"]:checked').val();

});
$("input:radio[name='4']").on("change",function(){
$("#04").css("background-color","gray");
question4= $('input:radio[name="4"]:checked').val();

});
$("input:radio[name='5']").on("change",function(){
$("#05").css("background-color","gray");
question5= $('input:radio[name="5"]:checked').val();


});
$("input:radio[name='6']").on("change",function(){
$("#06").css("background-color","gray");
question6= $('input:radio[name="6"]:checked').val();
});

$("input:radio[name='7']").on("change",function(){
$("#07").css("background-color","gray");
question7= $('input:radio[name="7"]:checked').val();
});
$("input:radio[name='8']").on("change",function(){
$("#08").css("background-color","gray");
question8= $('input:radio[name="8"]:checked').val();
});
$("input:radio[name='9']").on("change",function(){
$("#09").css("background-color","gray");
question9= $('input:radio[name="9"]:checked').val(); 
});
$("input:radio[name='10']").on("change",function(){
$("#010").css("background-color","gray");
question10= $('input:radio[name="10"]:checked').val();

});

 

});

</script>

