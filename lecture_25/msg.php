<?php
//session_start();
require_once 'views/header.php';
?>
<div class="alert alert-success">
<?php
if(isset($_SESSION['msg'])) {
    echo('<h2 class="col-md-offset-4">'.$_SESSION['msg'].'</h2>');
    unset($_SESSION['msg']);
    
}




?>
    </div>
<?php
require_once 'views/footer.php';
?>