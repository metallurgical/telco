<?php
include("config.php");
?>
<ul>
 		<li><a href="index.php">Home</a>
          </li>
        <li><a href="u_product_list.php">Products</a>
            <div>
                <ul>

                          <?php
	   
	   $hh1 = mysql_query("select distinct(product_category) as product_category  from product");
	   while($get_hh1 = mysql_fetch_array($hh1))
	   {
		   ?> <li><a href="u_product_list.php?kategory=<?php echo $get_hh1['product_category'];?>"><?php echo $get_hh1['product_category'];?></a></li>
           
           <?php
	   }
	   ?>
                            </ul>

              </div>
          </li>
        
        
        
        <li><a href="payment_info.php">Payment info</a>
          </li>
           </li>
        <li><a href="u_view_cart.php">Basket</a>
          </li>
        <li><a href="contact_us.php">Contact us</a></li>
        
        
      </ul>