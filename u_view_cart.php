<?php
session_start();
 $customer_id = @$_SESSION['customer_id'];

include("config.php");
 $product_id =@$_GET['product_id'];
 //$customer_id = $_GET['customer_id'];

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
    	<?php include("banner.php");?>
    </div>
	

    <div id="menu">
      <?php include("menu_user.php");?>
    </div>
    
     <div id="bawah_banner">
        <?php include("3pic.php");?>
    </div>
    <br />
    
 
 
   
    <div align="justify">
    
   <div class="h2_background">Welcome <?php if(@$_SESSION['user_name']==""){ echo "<font color='#E47D25'>Guest</font> to our shopping online store.";}else{
	   echo "<font color='#E47D25'>".@$_SESSION['user_name']."</font> to our shopping online store. <a href='logout_user.php'>Logout</a>";}?>  </div>
  <h2>Checkout : Follow step below to purchase</h2>
  <div class="content">
                <h3>Basket</h3>
                <table width="900" cellpadding="0" cellspacing="0" style="" class="table_ad" align="center">
  <tr>
    <th>Product picture</th>
    <th>Product name</th>
    <th>Product category</th>
   
    <th>Remove</th>
  </tr>
  <?php
  
  if(isset($customer_id))
  {
  $cari = mysql_query("select *from product_buy where customer_id='".$customer_id."'");
  $row_cari = mysql_num_rows($cari);
  
	  if($row_cari>0)
	  {
	  while($get_cari = mysql_fetch_array($cari))
	  {
	  	$pro_id=$get_cari['product_id'];
	   $cari1 = mysql_query("select *from product where product_id='$pro_id'");
	   while($get_cari1 = mysql_fetch_array($cari1))
	   {
  ?>
   <tr height="60" >
    <td style="border-left:1px solid #EDEDED;border-right:1px solid #EDEDED;border-bottom:1px solid #EDEDED;"><img src="images_pc/<?php echo $get_cari1['product_pic'];?>" height="60" width="60" style="padding:8px 8px 8px 8px;border:1px solid #D6D6D6;"/></td>
    <td style="border-right:1px solid #EDEDED;border-bottom:1px solid #EDEDED;"><font color="#38B0ED"><b><?php echo $get_cari1['product_name'];?></b></font></td>
    <td style="border-right:1px solid #EDEDED;border-bottom:1px solid #EDEDED;" align="center"><?php echo $get_cari1['product_category'];?></td>
    
    <td style="border-right:1px solid #EDEDED;border-bottom:1px solid #EDEDED;" align="center">[ <a href="u_view_cart_delete.php?product_id=<?php echo $get_cari['product_buy_id'];?>&customer_id=<?php echo $customer_id;?>" onclick="return confirm('Are you sure to remove this product??')">remove </a> ] </td>
  </tr>
  <?php
	   }
  	  }
	  }
	  else
	  {
		  echo "<tr><td colspan='4' align='center'><font color='#E47D25'>Your basket is empty</font></td></tr>";
	  }
  }
  else
  {
	  echo "<tr><td colspan='4' align='center'><font color='#E47D25'>Please login or create an account first to view your basket</font></td></tr>";
  }
  ?>
</table>

                
                </div>
   <div id="accordian">        
	<h3><p class="accordian_style" id="first" style="border-top:2px solid white;"><a href="#zs">Step 1 :</a></p></h3>
	<div id="zs"><br />
		
       
        
		<div class="content">
        Guest or members must <a href="index.php">login</a> first to buy from this website, if doesnt have any id, please <a href="register_account.php">create an account</a>. If already have an id <big>ignore</big> this message.
        </div>
		
	</div>
    
    <h3><p class="accordian_style" id="second" style="border-top:2px solid white;"><a href="#zx">Step 2 :</a></p></h3>
	<div id="zx">
		<div class="content">
        After select your order, please email us at e-telco@yahoo.com for further information with included this information.<br />
        - Your name<br />
        - Your Ic<br />
        - Your Address</br>
        - Your phone number.<br />
		We will contact you and check your email as soon as posible.
        </div>
	</div>
    
    <!-- <h3><p class="accordian_style" id="third" style="border-top:2px solid white;"><a href="#zx">Step 3 :</a></p></h3>
	<div id="za">
		<div class="content">
        Guest or members must <a href="u_login.php">login</a> first to buy from this website, if doesnt have any id, please <a href="register_account.php">create an account.</a>
        </div>
		
	</div>-->
    </div>
    </div>
   <script type="text/javascript">
	$("#first").click(function() {
	$("#zs").slideDown(1200).show('slideDown',{time:3},500);
	$("#zx,#za").slideUp('fast').hide();
});
$("#second").click(function() {
	$("#zs,#za").slideUp('fast').hide();
	
	$("#zx").slideDown(1200).show('slideDown',{time:3},500);
	
});
$("#third").click(function() {
	$("#zs,#zx").slideUp('fast').hide();
	
	$("#za").slideDown(1200).show('slideDown',{time:3},500);
	
});
	</script>
     <br />
    <center>
    <div id="footer">
    <?php include("footer.php");?>
    </div>
</center>

</div>
</center>
</body>
</html>