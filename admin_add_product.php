<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Computer sales center</title>
<link href="styles.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="jquery-1.7.1.js"></script>
<script type="text/javascript" src="jquery-effect.ui.js"></script>
 
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
    	<div class="dalam_content clearfix"> Add product information</div>
    <br />
   
   
   		<div class="kandungan">
        
       		<div class="content">
            
            <form action="admin_add_product_process.php" method="post" enctype="multipart/form-data" id="contact">
    
    <h2>Add product Form</h2>
    <div class="content">
    <b>Product name:</b><br />
    <input type="text" name="product_name" value="" size="50" class="input_teks_log"/>
    <br />
        <br />

    <b>Product price per unit (RM):</b><br />
    <input type="text" name="product_price_unit" value="" size="10" class="input_teks_log"/> 
    <br />
        <br />
        
        <b>Product brand:</b><br />
    <select name="product_brand" class="input_teks_log"/> 
    	<option value="">-- Please Select --</option>
        <option value="IBM">IBM</option>
        <option value="HP">HP</option>
        <option value="Others">Others</option>
        </select>
    <br />
        <br />
        
        <b>Product category:</b><br />
    <select name="product_category" class="input_teks_log"/> 
    	<option value="">-- Please Select --</option>
        <option value="Cable">Cable</option>
        <option value="Meter">Meter</option>
        <option value="Others">Others</option>
        
        
        </select>
    <br />
        <br />
        
    <b>Product description(For more details, separate with semicolumn ; ):</b><br />
    <textarea name="product_description1" cols="30" rows="5" style="width: 30%;background:#F8F8F8;border:1px solid #CCCCCC"></textarea>
    <br />    
    <!-- <b>Product description 1:</b><br />
    <textarea name="product_description1" cols="30" rows="5" style="width: 30%;background:#F8F8F8;border:1px solid #CCCCCC"></textarea>
    <br />

        <br />
        
         <b>Product description 2:</b><br />
    <textarea name="product_description2" cols="30" rows="5" style="width: 30%;background:#F8F8F8;border:1px solid #CCCCCC"></textarea>
    <br /> -->

        <br />
        
        <b>Product picture:</b><br />
    <input type="file" name="product_pic" value="" size="50" class="input_teks_log"/> 
    <br />
        <br />
        
     <input type="reset" value="Reset" class="input_button" /> <input type="submit" name="submit" value="Submit" class="input_button" />
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