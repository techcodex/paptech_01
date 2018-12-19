<?php

require_once 'views/header.php';
?>
<section id="form">
    <div class="container">
        <div class="col-sm-12">
            <div class="login-form"><!--login form-->
                <h2>Singup your account</h2>
                <form action="#">
                    <div class="form-group col-md-12">
                        <div class="input-group">
                            <label for="user_name">User Name:</label>
                            <input type="text" name="user_name" id="userName" class="form-control" placeholder="User Name">
                        </div>
                        <span class="err text-danger"></span>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <label for="email">Email:</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                        </div>
                        <span class="err text-danger"></span>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <label for="user_name">Password:</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                        <span class="err text-danger"></span>
                    </div>

                    <button type="submit" class="btn btn-primary">Singup</button>
                </form>
            </div><!--/login form-->
        </div>
    </div>
</section><!--/form-->
<?php

require_once 'views/footer.php';
?>