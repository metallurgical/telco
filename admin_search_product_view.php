<?php
session_start();
include("config.php");
$product_id = $_GET['product_id'];
$sel = mysql_query("select *from product where product_id = '$product_id'");
$get_sel = mysql_fetch_array($sel);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Computer sales center</title>
<link href="styles.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="jquery-1.7.1.js"></script>
<script type="text/javascript" src="jquery-effect.ui.js"></script>
<script type="text/javascript">
function hapus_data(message,url)
{
	if(confirm(message)) location.href=url;
}
	
	

</script>
 
</head>
<style type="text/css">
#submit{
	display:none;
}
#zs{
	display:block;
}
#zx,#za{
	display:none;
}
.accordian_style{
	background:#F8F8F8;
	border:1px solid #DBDEE1;
	border-top:1px solid #DBDEE1;
	color:#555555;
	padding:7px 7px 7px 7px;
	
}
.accordian_style a{
	
	color:#555555;
	text-decoration:none;
	
	
}
</style>
<body>
<center>
<div id="kandungan_besar">
	<div id="banner">
    	<?php include("banner_admin.php");?>
    </div>
	

    <div id="menu">
      <?php include("menu_admin.php");?>
    </div>
     <div style="background:url(images/header_admin.png) repeat-x;height:50px;margin-top:-15px">
   </div>
   
    <br />
    
    
    <div class="content" style="min-height: 150px; overflow: hidden;-moz-border-radius:5px;-webkit-border-radius:5px">
    	<div class="dalam_content clearfix"> View product information</div>
    <br />
   
   
   		<div class="kandungan">
        
       		<div class="content">
            
            <form action="admin_search_product_update.php?product_id=<?php echo $get_sel['product_id'];?>" method="post" enctype="multipart/form-data" id="contact">
    
    <h2>view product </h2>
    <div class="content">
    <b>Product name:</b><br />
   <font color="#38B0ED"><b> <?php echo $get_sel['product_name'];?></b></font>
   
    <br />
        <br />

    <b>Product price per unit (RM):</b><br />
    <font color="#38B0ED"><b> <?php echo $get_sel['product_price_unit'];?></b></font>
    <br />
        <br />
        
        <b>Product brand:</b><br />
    <font color="#38B0ED"><b><?php echo $get_sel['product_brand'];?></b></font>
    <br />
        <br />
        
        <b>Product category:</b><br />
     <font color="#38B0ED"><b><?php echo $get_sel['product_category'];?></b></font>
    <br />
        <br />
        
        
    <b>Product description 1:</b><br />
     <font color="#38B0ED"><b><?php echo $get_sel['product_description1'];?></b></font>
    <br />

        <!-- <br />
        
         <b>Product description 2:</b><br />
     <font color="#38B0ED"><b><?php echo $get_sel['product_description2'];?></b></font>
    <br /> -->

        <br />
        
        <b>Product picture:</b><br />
    <img src="images_pc/<?php echo $get_sel['product_pic'];?>" height="140" width="150" style="padding:8px 8px 8px 8px;border:1px solid #D6D6D6;"/>
    <br />
        <br />
        
     <input type="button" name="dele" value="Delete" class="input_button" onclick= "hapus_data('Are you sure to delete this file??','admin_search_product_delete.php?product_id=<?php echo $get_sel['product_id'];?>')"/><input type="submit" name="submit" value="Update" class="input_button" />
  </form>
            
            
            
            </div>
        
        
        
        </div>
    
    
    
    </div>
    
 
 
   
    
   
     <br />
    <center>
     <div style="background:url(images/header_admin.png) repeat-x;height:50px">
   </div>
   
    <div id="footer">
    <?php include("footer.php");?>
    </div>
</center>

</div>
</center>
</body>
</html>