<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RAM ERA</title>
<link href="styles.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="engine1/style.css"/>
<script type="text/javascript" src="jquery-1.7.1.js"></script>
<script type="text/javascript" src="jquery-effect.ui.js"></script>
<script type="text/javascript" src="engine1/jquery.js"></script>
<script type="text/javascript" src="engine1/wowslider.js"></script>
</head>
<style type="text/css">
#admin{
	/*display:none;*/
}
a#vlb{display:none}
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
    
        <div id="wowslider-container1">
	<div class="ws_images">
<span><img src="data1/images/10510052.jpg" alt="10510052" title="10510052" id="wows0"/></span>
<span><img src="data1/images/10510075.jpg" alt="10510075" title="10510075" id="wows1"/></span>
<span><img src="data1/images/10916059.jpg" alt="10916059" title="10916059" id="wows2"/></span>
</div>
<div class="ws_bullets"><div>
<a href="#wows0" title="10510052"><img src="data1/tooltips/10510052.jpg" alt="10510052"/>1</a>
<a href="#wows1" title="10510075"><img src="data1/tooltips/10510075.jpg" alt="10510075"/>2</a>
<a href="#wows2" title="10916059"><img src="data1/tooltips/10916059.jpg" alt="10916059"/>3</a>
</div></div>

	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine1/script.js"></script>

    
    <br />
    
    <div id="kiri">
   
    	<div id="dalam_kiri">
        	<div class="h2_background" id="user_log">Member login</div>
            <br />
            <div class="user_login" id="user">
            <form action="user_login_process.php?login=user" method="post">
            <p>E-mail address<br /><input type="text" size="30" class="input_teks" name="email"/></p>
            <p>Password<br /><input type="password" size="30" class="input_teks" name="customer_p"/></p>
             <p><input type="reset" value="Reset" class="input_button"/><input type="submit" value="Submit" class="input_button"/></p>
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
   
    <div id="kanan">
   <div class="h2_background">Welcome <?php if($_SESSION['user_name']==""){ echo "<font color='#E47D25'>Guest</font> to our shopping online store.";}else{
	   echo "<font color='#E47D25'>".$_SESSION['user_name']."</font> to our shopping online store. <a href='logout_user.php'>Logout</a>";}?>  </div>
    </div>
     
     
    
    <div id="footer">
    <?php include("footer.php");?>
    </div>


</div>
</center>
</body>
</html>