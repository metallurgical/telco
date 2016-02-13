<?php
include("config.php");

extract($_POST);

if(isset($_POST['submit']))
{
	if(($name_sender!="")&&($email_sender!="")&&($enquiry_sender!=""))
	{
$mas = mysql_query("insert into message_mail values('','$name_sender','$email_sender','$enquiry_sender')")or die(mysql_error());
			echo "<script type='text/javascript'>";
			echo "alert('Message successfull sent')";
			echo "</script>";
			echo "<meta http-equiv='refresh' content='0; url=contact_us.php'>";
	}
	else
	{
		
			echo "<script type='text/javascript'>";
			echo "alert('Please enter all the information before submitted')";
			echo "</script>";
			echo "<meta http-equiv='refresh' content='0; url=contact_us.php'>";
	}

}

?>