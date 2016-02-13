<?php
include("config.php");

$product_id = $_GET['product_id'];

if($product_id)
{
	$del = mysql_query("delete from product where product_id = '$product_id'");
	
	if($del)
	{
		echo "<script type='text/javascript'>";
			echo "alert('Data successful delete')";
			echo "</script>";
			echo "<meta http-equiv='refresh' content='0; url=admin_search_product.php'>";
			
	}
}

?>