<?php
session_start();
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
                        ?>
                    </h2>
                    <form action="process/process_signup.php" method="post">
                        <div class="form-group col-md-8">
                            <label for="user_name">User Name:</label>
                            <input type="text" name="user_name" id="user_name" class="user_name" placeholder="User Name">
                            <span class="user_name text-danger">
                                
                            </span>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="email">Email:</label>
                            <input type="text" name="email" id="email" class="email" placeholder="Email">
                            <span class="email text-danger">
                                
                            </span>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="password">Password:</label>
                            <input type="text" name="password" id="password" class="password" placeholder="Password ">
                            <span class="password text-danger">
                                
                            </span>
                        </div>
                        <div class="form-group col-md-4 col-md-offset-2">
                            <input type="submit" value="Singup" class="btn btn-primary">
                        </div>
                        
                    </form>
                </div><!--/sign up form-->
            </div>
    </div>
</section><!--/form-->
<?php

require_once 'views/footer.php';
?>