<?php
session_start();
include("config.php");
$message_mail_id= $_GET['message_id'];
$sel = mysql_query("select *from message_mail where message_mail_id = '$message_mail_id'");
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
    			<div class="dalam_content clearfix"> View customer message</div>
    <br />
   
   
   		<div class="kandungan">
        
                
        <br />
        		<form action="contact_us_process.php" method="post" enctype="multipart/form-data" id="contact">
    
    <h2>Message details</h2>
    <div class="content">
    <b>Sender Name:</b><br />
     <font color="#38B0ED"><b> <?php echo $get_sel['name_sender'];?></b></font>
    <br />
        <br />

    <b>Sender E-Mail Address:</b><br />
    <font color="#38B0ED"><b> <?php echo $get_sel['email_sender'];?></b></font>
    <br />
        <br />
    <b>Enquiry:</b><br />
    <font color="#38B0ED"><b> <?php echo $get_sel['enquiry_sender'];?></b></font>
    <br />

        <br />
     </div>
  </form>
   
        
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