<?php
require_once '../models/User.php';
require_once '../models/Location.php';
require_once '../models/Cart.php';
require_once '../views/header.php';
$obj_user->profile();
$obj_location = new Location();
?>
<section id="form"><!--form-->
    <div class="container">

        <?php
        if (isset($_SESSION['msg'])) {
            echo("<h2 class='alert alert-danger text-center'>" . $_SESSION['msg'] . "</h2>");
            unset($_SESSION['msg']);
        }
        if (isset($_SESSION['errors'])) {
            $errors = $_SESSION['errors'];
            unset($_SESSION['errors']);
        }
        ?>
        <div class="col-md-offset-3">
            <div class="signup-form"><!--sign up form-->

                <form action="<?php echo(BASE_URL); ?>products/process/process_order.php" method="post">
                    <div class="form-group col-md-8">
                        <label for="user_name">First Name:</label>
                        <input type="text" name="first_name" id="frist_name" value="<?php echo($obj_user->first_name); ?>" class="user_name form-control"  placeholder="Frist Name">
                        <span class="user_name text-danger">
                            <?php
                            if (isset($errors['first_name'])) {
                                echo($errors['first_name']);
                            }
                            ?>
                        </span>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="email">Middle Name:</label>
                        <input type="text" name="middle_name" id="middle_name" class="middle_name form-control" placeholder="Middle Name" value="<?php echo($obj_user->middle_name); ?>">
                        <span class="email text-danger">
                            <?php
                            if (isset($errors['middle_name'])) {
                                echo($errors['middle_name']);
                            }
                            ?>
                        </span>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="email">Last Name:</label>
                        <input type="text" name="last_name" id="last_name" class="last_name form-control" placeholder="Last Name" value="<?php echo($obj_user->last_name); ?>">
                        <span class="email text-danger">
                            <?php
                            if (isset($errors['last_name'])) {
                                echo($errors['last_name']);
                            }
                            ?>
                        </span>
                    </div>

                    <div class="form-group col-md-8">
                        <label for="email">Contact No:</label>
                        <input type="text" name="contact_number" id="contact_number" class="contact_number form-control" placeholder="Contact Number" value="<?php echo($obj_user->contact_number); ?>">
                        <span class="contact_number text-danger">
                            <?php
                            if (isset($errors['contact_number'])) {
                                echo($errors['contact_number']);
                            }
                            ?>
                        </span>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="password">Street Address:</label>
                        <textarea cols="20" rows="5" class="form-control" name="street_address">
                            <?php
                            if (!$obj_user->street_address == null) {
                                echo($obj_user->street_address);
                            }
                            ?>
                        </textarea>
                        <span class="street_address text-danger">
                            <?php
                            if(isset($errors['street_address'])) {
                                echo($errors['street_address']);
                            }
                            ?>
                        </span>
                    </div>                    
                    <div class="form-group col-md-2 col-md-offset-3">
                        <input type="submit" value="Confirm Order" class="btn btn-primary">
                    </div>

                </form>
            </div><!--/sign up form-->
        </div>
    </div>
</section><!--/form-->
<?php
require_once '../views/footer.php';
?>
