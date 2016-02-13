<?php
include("config.php");

$product_id = $_GET['product_id'];
$customer_id = $_GET['customer_id'];
//echo $customer_id;
if($product_id)
{
	$del = mysql_query("delete from product_buy where product_buy_id = '$product_id'");
	
	if($del)
	{
		echo "<script type='text/javascript'>";
			echo "alert('Data successful delete')";
			echo "</script>";
			echo "<meta http-equiv='refresh' content='0; url=u_view_cart.php?customer_id=$customer_id'>";
			
	}
}

?>