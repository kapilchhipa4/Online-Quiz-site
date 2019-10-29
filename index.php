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
<script>
   function func()
               {
                            //student name validation
                             var x=document.forms['form1']['name'].value;
                            var i;
                           
                               
                               for(i=0;i<x.length;i++)
                               {
                                      ch=x.charAt(i);
                                    if(!(ch>='a' && ch<='z') && !(ch>='A' && ch<='Z') && !(ch==' '))
                                    {
                                        alert("Invalid Student name");
                                        return false;
                                    }
                               

                               }

                     var e=document.forms['form1']['email1'].value;                  
                               if(e.length==0)
                                 {
                                     alert("Please Enter your Email");
                                     return false;
                                 }
                                 if(e.indexOf("@")==0)
                                     {
                                         alert('please enter valid email');
                                           return false;
                                            }
                                  if(((e.charAt(e.length-4))!='.') && ((e.charAt(e.length-3))!='.'))
                                    {
                                             alert('please enter valid email');
                                             return false;
                                    }

                      
                          


                            // Mobile Number Validation
                             var xyz=document.forms['form1']['mobile'].value; 
                                if(xyz.length==0)
                                 {
                                    alert("Please Enter Mobile number");
                                    return false;
                                 } 
                                 if(xyz.length<10 || xyz.length>10)
                                 {
                                   alert("Please Enter ten digit Mobile number");
                                   return false;
                                 }
                                  if(xyz.charAt(0)<=7)
                                {
                                    alert("Enter valid Mobile number");
                                    return false;
                                 }  
                 

                      var pass1=document.forms['form1']['password'].value;
                                  if(pass1.length==0)
                                  {
                                      alert("Please Enter Password");
                                      return false; 
                                  }
                                  if(pass1.length<8)
                                     {
                                            alert('enter atleast 8 digit or letter');
                                            return false;
                                         }

                      
                             // email validation                    }   
                            
                         
                                                  
                }

 </script>




</head>
<body>

<div class="container-fluid" style="height:100px;background-color: #004040">
  <h1 " style="text-align:center;padding-top: 20px;color: white">Online Examination Portal</h1>


</div>

<div class="container" >
<div class="row">

<div class="col" >
<h1>Sign in...</h1>
<form action="login.php" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary" name="2">Submit</button>
  </form>
  <?php
  if(isset($_REQUEST['err']))
    {
        echo"<h1 style='text-align:center;'> you are already registered";
        echo"<h1  style='text-align:center;'> please login";
    }
    if(isset($_REQUEST['err1']))
    {
        echo"<h1 style='text-align:center;'> you are not registered";
        echo"<h1  style='text-align:center;'> please sign up";
    }
    if(isset($_REQUEST['err2']))
    {
        echo"<h1 style='text-align:center;'> username or password is incorrect";
        echo"<h1  style='text-align:center;'> please try again...";
    }
     if(isset($_REQUEST['err12']))
    {
        echo"<h1 style='text-align:center;'> successfully registered";
      
    }
    ?>
</div>


<div class="col">
  <h1 style="display: inline-block;">Sign Up</h1>
<form  action="signup1.php" method="post" name="form1">
  <label style="margin-top:50px;" >Name:  </label>
  <input type="text" class="form-control" style="margin-top:0px;" required name="name" > 
  <label >Email:</label>
  <input type="email" name="email1" class="form-control" required ">
<label>Dob:</label>
<input type="date" class="form-control" name="dob" required value="14--4-98"><br>
<label> Gender:</label>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="customRadio1" value="male" name="gender" required>
      <label class="custom-control-label" for="customRadio1" >male</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="customRadio2" name="gender" value="female" required>
      <label class="custom-control-label" for="customRadio2">female </label>
    </div>
     <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="other" name="gender" value="other" required>
      <label class="custom-control-label" for="other" >Other </label>
    </div>
<br>
<label>Mobile No.</label>
<input type="tel" class="form-control" pattern="^\d{10}$" required name="mobile" ">
<label>Password.</label>
<input type="password" class="form-control" id="status" name="password"  required >

<label>Course:</label>
<input type="text" class="form-control"  required  name="course">
<label>Institute:</label>
<input type="text" class="form-control"  required   name="institute">
  
<br>
  <button type="submit" class="btn btn-primary" name="1" onclick="return func()">Submit</button>
</form> 
</div>


</div>


</div>



</body>