<?php
require_once '../models/Location.php';
require_once '../models/User.php';
require_once '../views/header.php';
require_once '../views/slider.php';
require_once '../views/side_bar.php';
require_once '../models/Product.php';
$obj_product = new Product();

/*
if(isset($_GET['limit'])) {
    $limit = $_GET['limit'];
} else {
    $limit = ITEM_PER_PAGE;
}
 * 
 */
$offset = isset($_GET['offset']) ? $_GET['offset'] : 0;
$limit = isset($_GET['limit']) ? $_GET['limit'] : ITEM_PER_PAGE;

$products = $obj_product->products($limit,$offset);

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
            $path = $_SERVER['DOCUMENT_ROOT']."/paptech/products/images/$product->product_name";
//            die("paht".$path);
            if(is_dir($path)) {
                echo("<img src='".BASE_URL."products/images/$product->product_name/$product->product_image' alt='' width='150px' height='150px' />");
            } else {
                echo("<img src='".BASE_URL."products/images/na.png' alt='' />");
            }
            
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
        <div class="clearfix"></div>
<ul class="pagination">
    <?php
    
    $page_nmbr = $obj_product->pagination(ITEM_PER_PAGE);
//    print_r($page_nmbr);
//    die;
    foreach ($page_nmbr as $p_no=>$offset) {
//        die("o".$offset);
        $page_number = $p_no +1;
        echo("<li><a href='".BASE_URL."products/products.php?offset=$offset'>".$page_number."</a></li>");
    }
    ?>
    <li><a href="">&raquo;</a></li>
</ul>
</div><!--features_items-->
</div>
<?php
require_once '../views/footer.php';
?>