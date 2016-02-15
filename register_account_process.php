<?php
include("config.php");

extract($_POST);

if(isset($_POST['submit']))
{
	
	
	$masuk = mysql_query("insert into customer values('','$name','$email','$telephone','$address','$address2','$city','$pos_code','','$region_state','$customer_password')");
	
	if($masuk)
	{
			echo "<script type='text/javascript'>";
			echo "alert('Succesful create account')";
			echo "</script>";
			echo "<meta http-equiv='refresh' content='0; url=user_login_process.php?email=$email&customer_p=$customer_password&login=user'>";
		
		
	}
	
}



?>