<?php
require_once '../models/User.php';
require_once '../models/Cart.php';
require_once '../models/Item.php';
require_once '../models/Product.php';
require_once '../views/header.php';
require_once '../views/side_bar.php';
$obj_item = new Item($_GET['id']);
?>
<div class="col-sm-9 padding-right">
                        <div class="product-details"><!--product-details-->
                            <div class="col-sm-5">
                                <div class="view-product">
                                    <img src="<?php echo(BASE_URL.$obj_item->image); ?>" alt="" style="height: 250px" />
                                </div>

                            </div>
                            <div class="col-sm-7">
                                <div class="product-information"><!--/product-information-->
                                    <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                                    <h2><?php echo($obj_item->item_name)?></h2>
                                    <span>
                                        <span><?php echo($obj_item->unit_price);?></span>
                                        <label>Quantity:</label>
                                        <input type="text" value="<?php echo($obj_cart->getQuantity($_GET['id'])); ?>" />
                                    </span>
                                    <p><b>Availability:</b> In Stock</p>
                                    <p><b>Condition:</b> New</p>
                                    <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                                </div><!--/product-information-->
                            </div>
                        </div><!--/product-details-->

                    </div>
<div class="clearfix"></div>

<?php
require_once '../views/footer.php';
?>