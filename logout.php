<?php

session_start();
if(isset($_POST['logout']))
{

	 session_unset();
	header("Location:index.php");
}
else
{

	header("Location:signup.php");
}

?>