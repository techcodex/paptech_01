<?php
require_once '../models/User.php';
require_once '../models/Cart.php';
require_once '../views/header.php';
?>
<section id="cart_items">
    <div class="container">
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description">Name</td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <?php
                echo("<form action='" . BASE_URL . "products/process/process_cart.php' method='post'>");


                if ($obj_cart->item) {
                    echo("<tbody>");
                    $grand_total = 0;
                    foreach ($obj_cart->item as $item) {
                        echo("<tr>");
                        echo("<td><img src='" . BASE_URL . "$item->image' width='80px' height='80px'></td>");
                        echo("<td><a href='".BASE_URL."products/product_detail.php?id=$item->item_id'>".$item->item_name."</a></td>");
                        echo("<td>" . $item->unit_price . "</td>");
                        echo("<td>");
                        echo("<div class='cart_quantity_button'>
                                <a class='cart_quantity_up' href=''> + </a>
                                <input class='cart_quantity_input' type='text' name='qtys[$item->item_id]' value='".$item->quantity."' autocomplete='off' size='2'>
                                <a class='cart_quantity_down' href=''> - </a>
                            </div>");
                        echo("</td>");
                        
                        echo("<td>" . $item->total . "</td>");
                        echo("<td>");
                        echo("<a href='".BASE_URL."products/process/process_cart.php?action=remove_item&product_id=$item->item_id' class='fa fa-times'></a>");
                        echo("</td>");
                        $grand_total += $item->total;
                        echo("</tr>");
                    }
                    echo("</tbody>");
                    echo("<tfoot>");
                    echo("<tr>");
                    echo("<td><a href='" . BASE_URL . "products/process/process_cart.php?action=empty_cart' class='btn btn-danger'>Empty Cart</a></td>");
                    echo("<td></td>");
                    echo("<td><a href='".BASE_URL."products/checkout.php' class='btn btn-info'>Check Out</a></td>");
                    echo("<td><button name='action' value='update_cart' class='btn btn-primary'>Update Cart</button></td>");
                    echo("<td>" . $grand_total . "</td>");
                    echo("</tr>");
                    echo("</tfoot>");
                    echo("</form>");
                } else {
                    echo("<tbody>");
                    echo("<tr><center><td>Your Cart Is Empty</td></center></tr>");
                    echo("</tbody>");
                }
                ?>
            </table>
            
        </div>
    </div>
    
</section>  


<?php
require_once '../views/footer.php';
?>