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
    
   <div class="h2_background">Welcome to our shopping online store. </div>
  
   <form action="register_account_process.php" method="post" enctype="multipart/form-data" id="register">
    <h2>Your Personal Details</h2>
     If you already have an account, login <a href="index.php">here.</a><br /><br />
    <div class="content">

      <table class="form" width="600" cellpadding="2" cellspacing="4">
        <tr>
          <td align="right"><span class="required">*</span> Name :</td>
          <td> <input type="text" name="name" value="" size="50" class="input_teks_log"/>
            </td>
        </tr>
       
        <tr>
          <td align="right"><span class="required">*</span> E-Mail :</td>

          <td> <input type="text" name="email" value="" size="50" class="input_teks_log"/>
            </td>
        </tr>
        <tr>
          <td align="right"><span class="required">*</span> Telephone :</td>
          <td> <input type="text" name="telephone" value="" size="20" class="input_teks_log"/>
            </td>

        </tr>
        
      </table>
    </div>
    <h2>Your Address </h2>

    <div class="content">
      <table class="form" width="600" cellpadding="2" cellspacing="4">
        
        <tr>
          <td align="right"><span class="required">*</span> Address 1 :</td>

          <td> <input type="text" name="address" value="" size="50" class="input_teks_log"/>
            </td>
        </tr>
        <tr>
          <td align="right"> Address 2 :</td>
          <td> <input type="text" name="address2" value="" size="50" class="input_teks_log"/></td>
        </tr>
        <tr>

          <td align="right"><span class="required">*</span> City :</td>
          <td> <input type="text" name="city" value="" size="20" class="input_teks_log"/>
            </td>
        </tr>
        <tr>
          <td align="right"><span class="required">*</span> Post Code :</td>

          <td> <input type="text" name="pos_code" value="" size="20" class="input_teks_log"/>
            </td>
        </tr>
      
        <tr>
          <td align="right"><span class="required">*</span> Region / State :</td>
          <td><select name="region_state"  class="input_teks_log">
                    						  <option value="">--Select State--</option>
         									  <option value="KELANTAN">KELANTAN</option>
                                              <option value="TERENGGANU">TERENGGANU</option>
                                              <option value="PAHANG">PAHANG</option>
                                              <option value="KUALA LUMPUR">KUALA LUMPUR</option>
                                              <option value="SELANGOR">SELANGOR</option>
                                              <option value="KEDAH">KEDAH</option>
                                              <option value="PULAU PINANG">PULAU PINANG</option>
                                              <option value="PERLIS">PERLIS</option>
                                              <option value="JOHOR">JOHOR</option>
                                              <option value="MELAKA">MELAKA</option>
                                              <option value="PERAK">PERAK</option>
                                              <option value="NEGERI SEMBILAN">NEGERI SEMBILAN</option>
                                              <option value="SABAH">SABAH</option>
                                              <option value="SERAWAK">SERAWAK</option>
            </select>

            </td>
        </tr>
      </table>
    </div>
    <h2>Your Password</h2>
    <div class="content">
      <table class="form">
        <tr>

          <td align="right"><span class="required">*</span> Password :</td>
          <td> <input type="password" name="customer_password" value="" size="30" class="input_teks_log" id="match1"/>
            </td>
        </tr>
        <tr>
          <td align="right"><span class="required">*</span> Password Confirm :</td>

          <td> <input type="password" name="confirm" value="" size="30" class="input_teks_log" id="match2" onkeyUp="matching()"/>
          <span id="output"></span>
            </td>
        </tr>
      </table>
    </div>
    
<p align="right"><input type="reset" value="Reset" class="input_button" id="reset"/><input type="submit" id="submit" name="submit" value="Submit" class="input_button"/></p>
    
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
    
    <div id="footer">
    <?php include("footer.php");?>
    </div>


</div>
</center>
</body>
</html>