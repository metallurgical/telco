<?php
include("config.php");
?>
<ul>
 		<li><a href="admin_login_success.php">Home</a>
          </li>
        <li><a href="admin_search_product.php">Product</a>
            <div>
                <ul>
                                       <!-- <li><a href="#">Sony</a></li>
                                        <li><a href="#">Mac (1)</a></li>-->
                                         <li><a href="admin_search_product.php">Search product</a></li>
           
           
                            </ul>

              </div>
          </li>
        <li><a href="">Product management</a>
            <div>
                <ul>
                                       <!-- <li><a href="#">Macs (0)</a></li>
                                        <li><a href="#">Windows (0)</a></li>-->
                                         <li><a href="admin_add_product.php">Add product</a></li>
     

                            </ul>
              </div>
          </li>
          <li><a href="">Purchase</a>
            <div>
                <ul>
                                       <!-- <li><a href="#">Macs (0)</a></li>
                                        <li><a href="#">Windows (0)</a></li>-->
                                         <li><a href="admin_view_purchase.php">Customer order</a></li>
     

                            </ul>
              </div>
          </li>
       <!-- <li><a href="">Reports</a>
            <div>
                <ul>
                                        <li><a href=""></a></li>
           
          
                            </ul>
              </div>
          </li>-->
        <li><a href="admin_view_message.php">Message</a>
          </li>
        <li><a href="logout_admin.php">Logout</a>
          </li>
          
          
        
        
        
      </ul>
      <p align="right" style="color:#FFF;margin-top:-30px;text-align:right"><br /><span >welcome : <font color="#FF6600"><?php echo $_SESSION['username'];?></font></span></p>