<?php

include("config.php");

extract($_POST);
$product_id = $_GET['product_id'];
$file_name=$_FILES['product_pic']['name'];

$file_tmp_name = $_FILES['product_pic']['tmp_name'];  

$km = "abcdefghijklmnopqrSTUVWXYZABCDEFGHIJKLMNOPQRz123456789";
		$l_km = strlen($km);
		$har = "ramEra";
		
		
		for($c = 0; $c<$l_km;$c++)
		{
			$har = $har.$km[mt_rand(0,strlen($km))];
		}
			$gf = $har.$file_name;
			$path = "images_pc/$gf";
			
			$gy = move_uploaded_file($file_tmp_name,$path);
			
			
$pro = mysql_query("update product set product_name='$product_name',product_pic='$gf',product_price_unit='$product_price_unit',product_brand='$product_brand',product_category='$product_category',product_description1='$product_description1',product_description2='$product_description2' where product_id='$product_id'");

if($pro)
{
	echo "<script type='text/javascript'>";
			echo "alert('Data successful update')";
			echo "</script>";
			echo "<meta http-equiv='refresh' content='0; url=admin_search_product.php'>";
}
else
{
	
echo "<script type='text/javascript'>";
			echo "alert('Failed, try again')";
			echo "</script>";
			echo "<meta http-equiv='refresh' content='0; url=admin_search_product.php'>";
}
?>