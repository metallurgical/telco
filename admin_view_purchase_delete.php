<?php
include("config.php");

$customer_id = $_GET['customer_id'];

if($customer_id)
{
	$del = mysql_query("delete from product_buy where customer_id = '$customer_id'");
	
	if($del)
	{
		echo "<script type='text/javascript'>";
			echo "alert('Data successful delete')";
			echo "</script>";
			echo "<meta http-equiv='refresh' content='0; url=admin_view_purchase.php'>";
			
	}
}

?>