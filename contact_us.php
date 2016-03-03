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
  
   <form action="contact_us_process.php" method="post" enctype="multipart/form-data" id="contact">
    <h2>Our Location</h2>
    <div class="contact-info">
      <div class="content"><div class="left"><b>Address:</b><br />

Lot 889-A, Jalan Pengkalan Chepa,<br />
16100 Kota Bharu, Kelantan.<br /><br />


<div class="left"><b>Branch Address:</b><br />

G-03E, CP Tower,<br />
Shah Alam, 40000 Selangor.



        </div>
        <br />
      <div class="right">
                <b>Telephone:</b><br />
        09 7738001 / 019 9388306<br />
        <br />
        <div class="right">
                <b>Faxs:</b><br />
        09 7738002<br />
        <br />
                      </div>

    </div>
    </div>
    <h2>Contact Form</h2>
    <div class="content">
    <b>Name:</b><br />
    <input type="text" name="name_sender" value="" size="50" class="input_teks_log"/>
    <br />
        <br />

    <b>E-Mail Address:</b><br />
    <input type="text" name="email_sender" value="" size="50" class="input_teks_log"/>
    <br />
        <br />
    <b>Enquiry:</b><br />
    <textarea name="enquiry_sender" cols="40" rows="10" style="width: 99%;background:#F8F8F8;border:1px solid #CCCCCC"></textarea>
    <br />

        <br />
     <input type="reset" value="Reset" class="input_button" /> <input type="submit" name="submit" value="Submit" class="input_button" />
  </form>
    </div>
   <script type="text/javascript">
	function matching()
	{
		var dua = document.getElementById("match2").value;
		var satu = document.getElementById("match1").value;
		
		
		if(dua!=satu)
		{
			//alert("xsama");
			document.getElementById("match2").focus;
			$("#output").html("<font color='red'>Password not match</font>");
			$("#submit").hide('slow');
			return false;
		}
		else
		{
			$("#output").html("<font color='green'>Password match correctly</font>");
			$("#submit").show('slow');
			
		}
		
	
	}
	
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