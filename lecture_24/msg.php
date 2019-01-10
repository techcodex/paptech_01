<?php
//session_start();
require_once 'views/header.php';
?>
<?php
if(isset($_SESSION['msg'])) {
    echo('<h2 class="col-md-offset-4 alert-success">'.$_SESSION['msg'].'</h2>');
    unset($_SESSION['msg']);
    
}



?>
<?php
require_once 'views/footer.php';
?>