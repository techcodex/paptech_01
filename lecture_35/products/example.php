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
        </tr>
    </thead>
    <tbody>
    <?php
      $items = $obj_cart->item;
//      echo("<pre>");
//      print_r($items);
//      echo("</pre>");
//      die;
      foreach($items as $item) {
        echo("<tr>");
        echo("<td>".$item->item_name."</td>");
        echo("<td><img src='".BASE_URL."$item->image' height='100px' width='100px'></td>");
        echo("<td>".$item->quantity."</td>");
        echo("<td>".$item->unit_price."</td>");
        echo("<td>".$item->total."</td>");
        echo("</tr>");
      }
      
    ?>
    </tbody>
    <tfoot>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><?php echo($obj_cart->total); ?></td>
        </tr>
    </tfoot>
</table>
<?php
require_once '../views/footer.php';
?>