<?php
include("config.php");
?>
<ul>
 		<li><a href="index.php">Home</a>
          </li>
        <li><a href="u_product_list.php?kategory=Cable">Cable</a>
            <div>
                <ul>
                                       <!-- <li><a href="#">Sony</a></li>
                                        <li><a href="#">Mac (1)</a></li>-->
                                         <?php
	   
	   $hh1 = mysql_query("select distinct(product_brand) as product_brand  from product where product_category='Cable'");
	   while($get_hh1 = mysql_fetch_array($hh1))
	   {
		   ?> <li><a href="u_product_list.php?kategory=Cable&p_brand=<?php echo $get_hh1['product_brand'];?>"><?php echo $get_hh1['product_brand'];?></a></li>
           
           <?php
	   }
	   ?>
                            </ul>

              </div>
          </li>
        <li><a href="u_product_list.php?kategory=Meter">Meter</a>
            <div>
                <ul>
                                       <!-- <li><a href="#">Macs (0)</a></li>
                                        <li><a href="#">Windows (0)</a></li>-->
                                         <?php
	   
	   $hh2 = mysql_query("select distinct(product_brand) as product_brand  from product where product_category='Meter'");
	   while($get_hh2 = mysql_fetch_array($hh2))
	   {
		   ?> <li><a href="u_product_list.php?kategory=Meter&p_brand=<?php echo $get_hh2['product_brand'];?>"><?php echo $get_hh2['product_brand'];?></a></li>
           
           <?php
	   }
	   ?>

                            </ul>
              </div>
          </li>
        
        <li><a href="contact_us.php">Contact us</a>

          </li>
        <li><a href="payment_info.php">Payment info</a>
          </li>
           </li>
        <li><a href="u_view_cart.php">Basket</a>
          </li>
        
        
        
      </ul>