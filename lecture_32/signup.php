<?php
//session_start();
require_once 'models/User.php';
require_once 'views/header.php';
?>
<section id="form"><!--form-->
    <div class="container">
            <div class="col-md-offset-3">
                <div class="signup-form"><!--sign up form-->
                    <h2 class="text-danger">
                        <?php
                            if(isset($_SESSION['msg'])) {
                                echo($_SESSION['msg']);
                                unset($_SESSION['msg']);
                            }
                            if(isset($_SESSION['errors'])) {
                                $errors = $_SESSION['errors'];
                                unset($_SESSION['errors']);
                            }
                        ?>
                    </h2>
                    <form action="process/process_signup.php" method="post">
                        <div class="form-group col-md-8">
                            <label for="user_name">User Name:</label>
                            <input type="text" name="user_name" id="user_name" value="<?php echo($obj_user->user_name); ?>" class="user_name form-control" placeholder="User Name">
                            <span class="user_name text-danger">
                                <?php
                                if(isset($errors['user_name'])) {
                                    echo($errors['user_name']);
//                                    unset($_SESSION['errors']['user_name']);
                                }
                                ?>
                            </span>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="email">Email:</label>
                            <input type="text" name="email" id="email" class="email form-control" placeholder="Email" value="<?php echo($obj_user->email); ?>">
                            <span class="email text-danger">
                                <?php
                                    if(isset($errors['email'])) {
                                        echo($errors['email']);
                                    }
                                ?>
                            </span>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password" class="password form-control" placeholder="Password ">
                            <span class="password text-danger">
                                <?php
                                    if(isset($errors['password'])) {
                                        echo($errors['password']);
                                    }
                                ?>
                            </span>
                        </div>
                        <div class="form-group col-md-2 col-md-offset-3">
                            <input type="submit" value="Singup" class="btn-primary">
                        </div>
                        
                    </form>
                </div><!--/sign up form-->
            </div>
    </div>
</section><!--/form-->
<?php

require_once 'views/footer.php';
?>