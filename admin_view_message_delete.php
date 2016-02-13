<?php
include("config.php");

$message_mail_id = $_GET['message_mail_id'];

if($message_mail_id)
{
	$del = mysql_query("delete from message_mail where message_mail_id = '$message_mail_id'");
	
	if($del)
	{
		echo "<script type='text/javascript'>";
			echo "alert('Email successful delete')";
			echo "</script>";
			echo "<meta http-equiv='refresh' content='0; url=admin_view_message.php'>";
			
	}
}

?>