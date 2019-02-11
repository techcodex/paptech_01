<?php
require_once '../models/User.php';
require_once '../models/Cart.php';
require_once '../views/header.php';
?>
<table class="table table-bordered">
    <thead>
        <tr class="text-center">
            <td>Name</td>
            <td>Image</td>
            <td>Quantity</td>
            <td>Price</td>
            <td>Total</td>
            <td>X</td>
        </tr>
    </thead>
    <form action="<?php echo(BASE_URL); ?>products/process/process_cart.php" method="post">
    <tbody>
    <?php
    if($obj_cart->item) {
      $items = $obj_cart->item;
//      echo("<pre>");
//      print_r($items);
//      echo("</pre>");
//      die;
      foreach($items as $item) {
        echo("<tr>");
        echo("<td>".$item->item_name."</td>");
        echo("<td><img src='".BASE_URL."$item->image' height='100px' width='100px'></td>");
        echo("<td><input type='text' value='".$item->quantity." ' name='qtys[".$item->item_id."]'></td>");
        echo("<td>".$item->unit_price."</td>");
        echo("<td>".$item->total."</td>");
        echo("<td><a href='".BASE_URL."products/process/process_cart.php?product_id=$item->item_id&action=remove_item' class='btn btn-danger'>Delete</a></td>");
        echo("</tr>");
      }  
    } else {
        echo("<tr>");
        echo("<td></td>");
        echo("<td></td>");
        echo("<td colspan='3'>Your Cart is Empty</td>");
        echo("</tr>");
    }
      
      
    ?>
    </tbody>
    <tfoot>
        <tr>
            <td><a href="<?php echo(BASE_URL);?>products/process/process_cart.php?action=empty_cart" class="btn btn-danger">Empty Cart</a></td>
            <td></td>
            <td><button type="submit" class='btn btn-info' name="action" value="update_cart">Update Cart</button></td>
            <td></td>
            <td><?php echo($obj_cart->total); ?></td>
        </tr>
    </tfoot>
    </form>
</table>
<?php
require_once '../views/footer.php';
?>