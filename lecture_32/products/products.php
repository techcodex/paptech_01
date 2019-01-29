<?php
require_once '../models/Location.php';
require_once '../models/User.php';
require_once '../views/header.php';
require_once '../views/slider.php';
require_once '../views/side_bar.php';
require_once '../models/Product.php';
$obj_product = new Product();
$products = $obj_product->products();
//echo("<pre>");
//print_r($products);
//echo("</pre>");
//die;
?>
<div class="col-sm-9 padding-right">
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Features Items</h2>
        <?php
        foreach ($products as $product) {
            echo('<div class="col-sm-4">');
            echo('<div class="product-image-wrapper">');
            echo('<div class="single-products">');
            echo('<div class="productinfo text-center">');
            echo("<img src='".BASE_URL."products/images/$product->product_name/$product->product_image' alt='' />");
            echo('<h2>$56</h2>');
            echo('<p>'.$product->product_name.'</p>');
            echo('<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>');
            echo('</div>');
            echo('<div class="product-overlay">');
            echo('<div class="overlay-content">');
            echo('<h2>$56</h2>');
            echo('<p>'.$product->product_name.'</p>');
            echo('<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>');
            echo('</div>');
            echo('</div>');
            echo('</div>');
            echo('<div class="choose">');
            echo('<ul class="nav nav-pills nav-justified">');
            echo('<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>');
            echo('<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>');
            echo("</ul>");
            echo("</div>");
            echo("</div>");
            echo("</div>");
        }
        ?>
<ul class="pagination">
    <li class="active"><a href="">1</a></li>
    <li><a href="">2</a></li>
    <li><a href="">3</a></li>
    <li><a href="">&raquo;</a></li>
</ul>
</div><!--features_items-->
</div>
<?php
require_once '../views/footer.php';
?>