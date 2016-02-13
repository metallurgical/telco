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
	

    <hr />
   <div style="background:url(images/header_admin.png) repeat-x;height:50px">
   </div>
   
   
   

 <br /><br />
   
    <div class="content" style="min-height: 150px; overflow: hidden;-moz-border-radius:5px">
    
    
                  <form action="user_login_process.php?login=admin" method="post" enctype="multipart/form-data" id="form">
        <table style="width: 50%;border:1px solid #DBDBDB;-moz-border-radius:10px;-webkit-border-radius:10px" align="center">
        <tr>
        	<td colspan="2" align="center" style="background:#EFEFEF;color:#003A88;border:1px solid #DBDBDB;-moz-border-radius:10px;-webkit-border-radius:10px" height="50">Please enter your login details
            </td>
          <tr>

            <td style="text-align: center;" rowspan="4"><img src="images/login.png" /></td>
          </tr>
          <tr>
            <td>Username:<br />
              <input type="text" name="username" value="" style="margin-top: 4px;" />
              <br />
              <br />
              Password:<br />

              <input type="password" name="password" value="" style="margin-top: 4px;" />
              <br />
              </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>

            <td style="text-align: right;"><input type="reset" id="buang" value="Reset" class="input_button"/><input type="submit" id="tutup" value="Login" class="input_button"/></td>
          </tr>
        </table>
                
              </form>
    </div>
 
 
 
   
    
   
     <br /> <br /> <br />
    <center>
    <div id="footer">
    <?php include("footer.php");?>
    </div>
</center>

</div>
</center>
</body>
</html>