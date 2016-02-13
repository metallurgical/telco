<?php
include("config.php");
?>
<ul>
 		<li><a href="index.php">Home</a>
          </li>
        <li><a href="u_product_list.php?kategory=Desktop">Desktops</a>
            <div>
                <ul>
                                       <!-- <li><a href="#">Sony</a></li>
                                        <li><a href="#">Mac (1)</a></li>-->
                                         <?php
	   
	   $hh1 = mysql_query("select distinct(product_brand) as product_brand  from product where product_category='Desktop'");
	   while($get_hh1 = mysql_fetch_array($hh1))
	   {
		   ?> <li><a href="u_product_list.php?kategory=Desktop&p_brand=<?php echo $get_hh1['product_brand'];?>"><?php echo $get_hh1['product_brand'];?></a></li>
           
           <?php
	   }
	   ?>
                            </ul>

              </div>
          </li>
        <li><a href="u_product_list.php?kategory=Laptop/Notebook">Laptops &amp; Notebooks</a>
            <div>
                <ul>
                                       <!-- <li><a href="#">Macs (0)</a></li>
                                        <li><a href="#">Windows (0)</a></li>-->
                                         <?php
	   
	   $hh2 = mysql_query("select distinct(product_brand) as product_brand  from product where product_category='Laptop/Notebook'");
	   while($get_hh2 = mysql_fetch_array($hh2))
	   {
		   ?> <li><a href="u_product_list.php?kategory=Laptop/Notebook&p_brand=<?php echo $get_hh2['product_brand'];?>"><?php echo $get_hh2['product_brand'];?></a></li>
           
           <?php
	   }
	   ?>

                            </ul>
              </div>
          </li>
        <li><a href="u_product_list.php?kategory=Component">Components</a>
            <div>
                <ul>
                                        <!--<li><a href="#">Mice and Trackballs (0)</a></li>
                                        <li><a href="#">Monitors (2)</a></li>

                                        <li><a href="#">Printers (0)</a></li>
                                        <li><a href="#">Scanners (0)</a></li>
                                        <li><a href="#">Speaker (0)</a></li>-->
                                        <?php
	   
	   $hh3 = mysql_query("select distinct(product_brand) as product_brand  from product where product_category='Component'");
	   while($get_hh3 = mysql_fetch_array($hh3))
	   {
		   ?> <li><a href="u_product_list.php?kategory=Component&p_brand=<?php echo $get_hh3['product_brand'];?>"><?php echo $get_hh3['product_brand'];?></a></li>
           
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