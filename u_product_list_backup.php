<?php
session_start();
 include("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RAM ERA</title>
<link href="styles.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="jquery-1.7.1.js"></script>
<script type="text/javascript" src="jquery-effect.ui.js"></script>
</head>
<style type="text/css">
#admin{
	/*display:none;*/
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
                <table width="950" border="0" cellspacing="1" cellpadding="2">
          <tr>
            <td><img src="images/10510075.jpg" width="300" class="gambar"/></td>
            <td><img src="images/10510052.jpg" width="300" class="gambar"/></td>
            <td><img src="images/10916059.jpg" width="300" class="gambar"/></td>
            <td>&nbsp;</td>
          </tr>
        </table>

    </div>
    <br />
    
    <div id="kiri">
   
    	<div id="dalam_kiri">
        	<div class="h2_background" id="user_log">Member login</div>
            <br />
            <div class="user_login" id="user">
            <form action="user_login_process.php" method="post">
            <p>E-mail address<br /><input type="text" size="30" class="input_teks" name="email"/></p>
            <p>Password<br /><input type="password" size="30" class="input_teks" name="customer_p"/></p>
             <p><input type="reset" value="Reset"/><input type="submit" value="Submit"/></p>
             </form>
             <p>Login or <a href="register_account.php">create account</a> ? </p>
            </div>
            
            <br />
            
            <div class="h2_background" id="admin_log">Information</div><br />
            <div class="user_login" id="admin">
             <ul>
             	<li>Check our latest brand in menu above</li>
                <li>We update products daily</li>
                <li>Stay here as a family</li>
                <li>Below are new arrival
                	<ul>
                    	<li>Speaker</li>
                        <li>Fan latop</li>
                    </ul>
                </li>
              </ul>
            </div>
        </div>
    
    </div>
 
 <script type="text/javascript">
 $("#user_log").click(function(){
	 $("#user").slideToggle(1500);
	  $("#admin").hide();
 });
 $("#admin_log").click(function(){
	 $("#admin").slideToggle(1500);
	  $("#user").slideUp(1500);
 });
 
 </script>
   
    <div class="kanan3 clearfix">
   <div class="h2_background">Welcome <?php if($_SESSION['user_name']==""){ echo "<font color='#E47D25'>Guest</font> to our shopping online store.";}else{
	   echo "<font color='#E47D25'>".$_SESSION['user_name']."</font> to our shopping online store. <a href='logout_user.php'>Logout</a>";}?>  </div>
       
       
       <center>
       <br />
       <div class="content">
       <!--<form action="" method="post">
       	<table width="300" border="0" cellspacing="3" cellpadding="2">
  <tr>
    <td>Find</td>
    <td>:</td>
    <td><select name="category" class="input_teks1">
    <option value="">--Please select--</option>
     <?php
	   
	   $hh1 = mysql_query("select distinct(product_brand) as product_brand from product");
	   while($get_hh1 = mysql_fetch_array($hh1))
	   {
		   ?>
    		 <option value="<?php echo $get_hh1['product_brand'];?>"><?php echo $get_hh1['product_brand'];?></option>
             <?php
	   }
	   ?>
         </select>
    </td>
    <td><input type="submit" name="hantar" value="Search" class="input_button"/></td>
  </tr>
</table>
	</form>--><div id="output"></div>
    
       </div></center>
       
       <br />
      <div class="content">
       <form>
       <?php
	   
	   $kategory = $_GET['kategory'];
	   $p_brand = $_GET['p_brand'];
	   
	   if(($kategory)&&($p_brand==""))
	   {
		     $kategory1 = $kategory;
	   $hh = mysql_query("select *from product where product_category='$kategory1'");
	   while($get_hh = mysql_fetch_array($hh))
	   {
	   ?>
       		<table width="600" border="0" cellspacing="3" cellpadding="2" style="border:1px solid #EDEDED;border-left:none;padding:5px 5px 5px 5px;margin:3px;">
  <tr>
    <td width="120"><img src="images_pc/<?php echo $get_hh['product_pic'];?>" height="80" width="100" style="padding:8px 8px 8px 8px;border:1px solid #D6D6D6;"/></td>
    <td align="left"><div style="margin-top:-10px;text-align:left"><font color="#38B0ED"><b><?php echo $get_hh['product_name'];?>
    </b></font></div><br />
    				<div>
                    <?php echo $get_hh['product_description1'];?><br /><?php echo $get_hh['product_description2'];?>
                    </div>
     <input type="hidden" value="<?php echo $_SESSION['user_name'];?>" class="sesi_user"/>
     <input type="hidden" value="<?php echo $get_hh['product_id'];?>" class="product_id"/>
     <input type="hidden" value="<?php echo $_SESSION['customer_id'];?>" class="customer_id"/>
    </td>
    <td width="100" style="border-left:1px solid #EDEDED;margin-top:-30px;"> <font color="#990000">RM <?php echo $get_hh['product_price_unit'];?></font><br /><br /><!--<input type="hidden" value="<?php $_SESSION['user_name'];?>" id="sesi_user"/>--><div class="input_button" align="center" >Add to Cart</div></td>
  </tr>
</table>
<?php
	   }
	   }
	   elseif(($kategory)&&($p_brand))
	   {
		   $kategory2 = $kategory;
	   		$p_brand2 = $p_brand;
		   $hh2 = mysql_query("select *from product where product_category='$kategory2' and product_brand='$p_brand2' order by product_id desc");
	   while($get_hh2 = mysql_fetch_array($hh2))
	   {
	   ?> <input type="hidden" value="<?php echo $get_hh2['product_id'];?>" class="product_id" name="hh"/>
       		<table width="600" border="0" cellspacing="3" cellpadding="2" style="border:1px solid #EDEDED;border-left:none;padding:5px 5px 5px 5px;margin:3px;">
  <tr>
    <td width="120"><img src="images_pc/<?php echo $get_hh2['product_pic'];?>" height="80" width="100" style="padding:8px 8px 8px 8px;border:1px solid #D6D6D6;"/></td>
    <td align="left"><div style="margin-top:-10px;text-align:left"><font color="#38B0ED"><b><?php echo $get_hh2['product_name'];?>
    </b></font></div><br />
    				<div>
                    <?php echo $get_hh2['product_description1'];?><br /><?php echo $get_hh2['product_description2'];?>
                    </div>
     <input type="hidden" value="<?php echo $_SESSION['user_name'];?>" class="sesi_user"/>
    <input type="text" value="<?php echo $get_hh2['product_id'];?>" class="a" onkepUp="return hh()"/>
      <input type="hidden" value="<?php echo $_SESSION['customer_id'];?>" class="customer_id"/>
    </td>
    <td width="100" style="border-left:1px solid #EDEDED;margin-top:-30px;"> <font color="#990000">RM <?php echo $get_hh2['product_price_unit'];?></font><br /><br /><div class="input_button" align="center"  >Add to Cart</div></td>
  </tr>
</table>
<?php
	   }
	   }
	   ?>
      
       </form>
       
      </div>
    </div>
    <script type="text/javascript">
	 
	 $(".input_button").click(function()
	 {
		 
		  var a = $(".a").val();
		 var sesi_user = $(".sesi_user").val();
		 var product_id = $(".product_id").val();
		  var customer_id = $(".customer_id").val();
		 //alert(a);
		 if(sesi_user == "")
		 {
			 alert("Please login or create account");
		 }
		 else
		 {
			 $.ajax({
				 type:"POST",
				 url:"u_product_list_add_cart.php",
				 data :"sesi_user="+sesi_user+"&product_id="+product_id+"&customer_id="+customer_id,
				 success:function(data)
				 {
					 
					  $("#output").hide().html("<div style='width:300px;border:2px solid #00FF00;background:#F0FFF0;color:#00FF00'>Your basket is "+data+" now</div>").fadeIn(7500).fadeOut(4000);
					 
				 }
			 		})
		 }
		 
		 
	});
	 
	 </script>
     
    
    <div id="footer">
    <?php include("footer.php");?>
    </div>


</div>
</center>
</body>
</html>