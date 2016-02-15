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
    
 
 
   
    <div align="justify">
    
   <div class="h2_background">Welcome <?php if(@$_SESSION['user_name']==""){ echo "<font color='#E47D25'>Guest</font> to our shopping online store.";}else{
	   echo "<font color='#E47D25'>".@$_SESSION['user_name']."</font> to our shopping online store. <a href='logout_user.php'>Logout</a>";}?>  </div>
  <h2>Checkout information</h2>
   <div id="accordian">        
	<h3><p class="accordian_style" id="first" style="border-top:2px solid white;"><a href="#zs">Step 1 :</a></p></h3>
	<div id="zs"><br />
		
       
        
		<div class="content">
        Guest or members must <a href="u_login.php">login</a> first to buy from this website, if doesnt have any id, please <a href="register_account.php">create an account.</a>
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
    
     <!--<h3><p class="accordian_style" id="third" style="border-top:2px solid white;"><a href="#zx">Step 3 :</a></p></h3>
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