<?php
require_once 'views/header.php';
?>
<div class="row">
    <?php
        if(isset($_SESSION['errors'])) {
            $errors = $_SESSION['errors'];
            unset($_SESSION['errors']);
        }
    ?>
    <div class="panel col-md-6 col-md-offset-3" >
        <div class="panel-heading" style="background-color: skyblue;">
            <center>Change Profile Picture</center>
        </div>
        <div class="panel-body">
            <img src="<?php echo(BASE_URL . $obj_user->profile_image); ?>" class="col-md-offset-4">
        </div>
        <div class="panel-footer">
            <center>
                <form action="<?php echo(BASE_URL) ?>process/process_change_profile_image.php" method="post" enctype="multipart/form-data">
            <div class="form-group col-md-8">
                
                    <input type="file" name="profile_image"  class="form-control col-md-offset-3">
                    <span class="password text-danger">
                        <?php
                            if(isset($errors['profile_image'])) {
                                echo($errors['profile_image']);
                            }
                        ?>
                    </span>

                
            </div>
                <div  class="row">
                <input type="submit" style="margin-left: 20px;" value="Updload" class="btn btn-success">
            </div>
                </form>
            </center>
        </div>
    </div>
</div>
<?php
require_once 'views/footer.php';
?>