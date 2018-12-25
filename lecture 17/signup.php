<?php

require_once 'views/header.php';
?>
<section id="form"><!--form-->
    <div class="container">
        
            <div class="col-md-offset-3">
                <div class="signup-form"><!--sign up form-->
                    <h2>New User Signup!</h2>
                    <form action="#">
                        <div class="form-group col-md-8">
                            <label for="user_name">User Name:</label>
                            <input type="text" name="user_name" id="user_name" class="user_name" placeholder="User Name">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="email">Email:</label>
                            <input type="text" name="email" id="email" class="email" placeholder="Email">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="password">Password:</label>
                            <input type="text" name="password" id="password" class="password" placeholder="Password ">
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