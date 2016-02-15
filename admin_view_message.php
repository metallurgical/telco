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
    			<div class="dalam_content clearfix"> View customer message</div>
    <br />
   
   
   		<div class="kandungan">
        
                
        <br />
        		<div class="content">
                <h3>Message list <?php if((@$product_name)||(@$product_category)){echo "with keyword <em><font color='red'>$product_name</font></em> and <em><font color='red'>$product_category</font></em> ";}?></h3>
                <table width="900" cellpadding="0" cellspacing="0" style="" class="table_ad" align="center">
  <tr>
    <th>Sender</th>
    <th>Sender email</th>
    <th>Message</th>
    
    <th>delete</th>
  </tr>
  <?php
  include("config.php");
  $product_name = @$_POST['product_name'];
  $product_category = @$_POST['product_category'];
  
  $cari = mysql_query("select *from message_mail");
  while($get_cari = mysql_fetch_array($cari))
  {
  ?>
   <tr height="60" >
    <td style="border-left:1px solid #EDEDED;border-right:1px solid #EDEDED;border-bottom:1px solid #EDEDED;"><?php echo $get_cari['name_sender'];?></td>
    <td style="border-right:1px solid #EDEDED;border-bottom:1px solid #EDEDED;"><font color="#38B0ED"><b><?php echo $get_cari['email_sender'];?></b></font></td>
    <td style="border-right:1px solid #EDEDED;border-bottom:1px solid #EDEDED;"><a target="_blank" href="admin_view_message_view.php?message_id=<?php echo $get_cari['message_mail_id'];?>"/><?php 
	
				$position=20;
					$content1 = $get_cari['enquiry_sender'];		
		$post = substr($content1,0,$position);
		echo $post;
		echo"................"; ?></td>
    
    <td style="border-right:1px solid #EDEDED;border-bottom:1px solid #EDEDED;">[ <a href="admin_view_message_delete.php?message_mail_id=<?php echo $get_cari['message_mail_id'];?>" onclick="return confirm('Are you sure to delete this message??')">delete </a> ] </td>
  </tr>
  <?php
  }
  ?>
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