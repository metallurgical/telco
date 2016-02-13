<?php
session_start();
include("config.php");
$email = $_REQUEST['email'];
$customer_p = $_REQUEST['customer_p'];

$login = $_REQUEST['login'];

if($login=="user")
{

$masuk = mysql_query("select *from customer where email='$email' and customer_password='$customer_p'")or die(mysql_error());
$get_m = mysql_fetch_array($masuk);
$user_email = $get_m['email'];
$user_name = $get_m['name'];
$c_p = $get_m['customer_password'];
$customer_id = $get_m['customer_id'];

if(($c_p!=$customer_p)&&($email!=$user_email))
{
			echo "<script type='text/javascript'>";
			echo "alert('Fail, try again')";
			echo "</script>";
			echo "<meta http-equiv='refresh' content='0; url=index.php'>";
	
}

else
{
			session_start();
			$_SESSION['user_name']=$user_name;
			$_SESSION['customer_id']=$customer_id;
			echo "<meta http-equiv='refresh' content='0; url=index.php'>";
	
}
}
else
{
	$username=$_POST['username'];
	$password = $_POST['password'];
	$masuk = mysql_query("select *from user where username='$username' and password='$password'")or die(mysql_error());
	$get_m = mysql_fetch_array($masuk);
		
	$user_name = $get_m['username'];
	$c_p = $get_m['password'];
	
	if(($user_name!=$username)&&($c_p!=$password)||($user_name==""))
	{
			echo "<script type='text/javascript'>";
			echo "alert('Fail, try again')";
			echo "</script>";
			echo "<meta http-equiv='refresh' content='0; url=admin_login.php'>";
	
	}
	else
	{
			$_SESSION['username']=$user_name;
			echo "<meta http-equiv='refresh' content='0; url=admin_login_success.php'>";
	}
	
}

?>