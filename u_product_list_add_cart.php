<?php
include("config.php");

$sesi_user = $_POST['sesi_user'];
$product_id = $_POST['product_id'];
$customer_id = $_POST['customer_id'];

$jj = mysql_query("select *from product where product_id='$product_id'");
$get_jj = mysql_fetch_array($jj);
$harga = $get_jj['product_price_unit'];


$jj1= mysql_query("insert into product_buy(product_id,customer_id,product_price_unit)values('$product_id','$customer_id','$harga')");

$jj2 = mysql_query("select *from product_buy where customer_id='$customer_id'");


$jumlah=0;
while($get_jj2 = mysql_fetch_array($jj2))
{
	$harga1 = $get_jj2['product_price_unit'];
	
	$jumlah = $jumlah + $harga1;
	
}

echo "RM ".$jumlah;
?>