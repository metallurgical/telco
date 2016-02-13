<?php
session_start();
include("config.php");
$customer_id = $_GET['customer_id'];
$sel = mysql_query("select *from customer where customer_id = '$customer_id'");
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
    	<div class="dalam_content clearfix"> View order information</div>
    <br />
   
   
   		<div class="kandungan">
        
       		<div class="content">
            
            <form action="admin_search_product_update.php?product_id=<?php echo $get_sel['product_id'];?>" method="post" enctype="multipart/form-data" id="contact">
    
    <h2>Customer details </h2>
    <div class="content">
    <b>Customer name:</b><br />
   <font color="#38B0ED"><b> <?php echo $get_sel['name'];?></b></font>
   
    <br />
        <br />

    <b>Customer email:</b><br />
    <font color="#38B0ED"><b> <?php echo $get_sel['email'];?></b></font>
    <br />
        <br />
        
        <b>Customer telephone:</b><br />
    <font color="#38B0ED"><b><?php echo $get_sel['telephone'];?></b></font>
    <br />
        <br />
        
        <b>Customer address:</b><br />
     <font color="#38B0ED"><b><?php echo $get_sel['address'];?>,<br />
     <?php echo $get_sel['address2'];?> ,<br /> 
	  <?php echo $get_sel['pos_code'];?> <?php echo $get_sel['city'];?><br />
       <?php echo $get_sel['region_state'];?> </b></font>
    <br />
        <br />
        </div></form>
        
    
        
        
                <h3>Customer Orders  </h3>
                <table width="900" cellpadding="0" cellspacing="0" style="" class="table_ad" align="center">
  <tr>
    <th>Product picture</th>
    <th>Product name</th>
    <th>Product category</th>
    <th>price unit(s)</th>
    <th>Total</th>
  </tr>
  <?php
  include("config.php");
  /*$product_name = $_POST['product_name'];
  $product_category = $_POST['product_category'];*/
  $jum = 0;
  $cari = mysql_query("select * from product_buy where customer_id = '$customer_id' order by product_buy_id desc");
  while($get_cari = mysql_fetch_array($cari))
  {
	  $pro_id = $get_cari['product_id'];
	   $cari1 = mysql_query("select * from product where product_id = '$pro_id'")or die(mysql_error());
	   while($get_cari1 = mysql_fetch_array($cari1))
 		 {	
		 	$pro_price = $get_cari1['product_price_unit'];
			$jum = $jum + $pro_price;
  ?>
   <tr height="60" >
    <td style="border-left:1px solid #EDEDED;border-right:1px solid #EDEDED;border-bottom:1px solid #EDEDED;"><img src="images_pc/<?php echo $get_cari1['product_pic'];?>" height="60" width="60" style="padding:8px 8px 8px 8px;border:1px solid #D6D6D6;"/></td>
    <td style="border-right:1px solid #EDEDED;border-bottom:1px solid #EDEDED;"><font color="#38B0ED"><b><?php echo $get_cari1['product_name'];?></b></font></td>
    <td style="border-right:1px solid #EDEDED;border-bottom:1px solid #EDEDED;"><?php echo $get_cari1['product_category'];?></td>
    <td style="border-right:1px solid #EDEDED;border-bottom:1px solid #EDEDED;">RM <?php echo $get_cari1['product_price_unit'];?></td>
    <td style="border-right:1px solid #EDEDED;border-bottom:1px solid #EDEDED;">RM <?php echo $get_cari1['product_price_unit'];?></td>
  </tr>
  <?php
  		}
  }
  ?>
  <tr>
     <td style="border-left:1px solid #EDEDED;border-right:1px solid #EDEDED;border-bottom:1px solid #EDEDED;"><font color = red>Total</font></td>
    <td style="border-bottom:1px solid #EDEDED;"></td>
    <td style="border-bottom:1px solid #EDEDED;"></td>
    <td style="border-bottom:1px solid #EDEDED;"></td>
   <td style="border-right:1px solid #EDEDED;border-bottom:1px solid #EDEDED;">= RM <?php echo $jum;?></td>
  </tr>
</table>

                
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