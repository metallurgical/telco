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
    	<div class="dalam_content clearfix"> Update product information</div>
    <br />
   
   
   		<div class="kandungan">
        
       		<div class="content">
            
            <form action="admin_search_product_update_process.php?product_id=<?php echo $get_sel['product_id'];?>" method="post" enctype="multipart/form-data" id="contact">
    
    <h2>Update product Form</h2>
    <div class="content">
    <b>Product name:</b><br />
    <input type="text" name="product_name" value="<?php echo $get_sel['product_name'];?>" size="50" class="input_teks_log"/>
    <br />
        <br />

    <b>Product price per unit (RM):</b><br />
    <input type="text" name="product_price_unit" value="<?php echo $get_sel['product_price_unit'];?>" size="10" class="input_teks_log"/> 
    <br />
        <br />
        
        <b>Product brand:</b><br />
    <select name="product_brand" class="input_teks_log"/> 
    	<option value="">-- Please Select --</option>
        <option value="ACER" <?php if($get_sel['product_brand']=="ACER")echo 'selected'?>>ACER</option>
        <option value="IBM" <?php if($get_sel['product_brand']=="IBM")echo 'selected'?>>IBM</option>
        <option value="COMPAQ" <?php if($get_sel['product_brand']=="COMPAQ")echo 'selected'?>>COMPAQ</option>
        <option value="DELL" <?php if($get_sel['product_brand']=="DELL")echo 'selected'?>>DELL</option>
        <option value="TOSHIBA" <?php if($get_sel['product_brand']=="TOSHIBA")echo 'selected'?>>TOSHIBA</option>
        <option value="MAC" <?php if($get_sel['product_brand']=="MAC")echo 'selected'?>>APPLE MAC</option>
        <option value="SAMSUNG" <?php if($get_sel['product_brand']=="SAMSUNG")echo 'selected'?>>SAMSUNG</option>
         <option value="HP" <?php if($get_sel['product_brand']=="HP")echo 'selected'?>>HP</option>
          <option value="ASUS" <?php if($get_sel['product_brand']=="ASUS")echo 'selected'?>>ASUS</option>
           <option value="LENOVO" <?php if($get_sel['product_brand']=="LENOVO")echo 'selected'?>>LENOVO</option>
        
        </select>
    <br />
        <br />
        
        <b>Product category:</b><br />
    <select name="product_category" class="input_teks_log"/> 
    	<option value="">-- Please Select --</option>
        <option value="Desktop" <?php if($get_sel['product_category']=="Desktop")echo 'selected'?>>Desktop</option>
        <option value="Component" <?php if($get_sel['product_category']=="Component")echo 'selected'?>>Component</option>
        <option value="Laptop/Notebook" <?php if($get_sel['product_category']=="Laptop/Notebook")echo 'selected'?>>Laptop & Notebook</option>
        
        
        </select>
    <br />
        <br />
        
        
    <b>Product description 1:</b><br />
    <textarea name="product_description1" cols="30" rows="5" style="width: 30%;background:#F8F8F8;border:1px solid #CCCCCC"><?php echo $get_sel['product_description1'];?></textarea>
    <br />

        <br />
        
         <b>Product description 2:</b><br />
    <textarea name="product_description2" cols="30" rows="5" style="width: 30%;background:#F8F8F8;border:1px solid #CCCCCC"><?php echo $get_sel['product_description2'];?></textarea>
    <br />

        <br />
        
        <b>Product picture:</b><br />
    <input type="file" name="product_pic" value="" size="50" class="input_teks_log"/> 
    <br />
        <br />
        
     <input type="submit" name="submit" value="Save" class="input_button" /> 
     </div>
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