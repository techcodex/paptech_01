<?php
//session_start();
require_once 'models/User.php';
require_once 'models/Cart.php';
require_once 'views/header.php';
?>
<section id="form"><!--form-->
    <div class="container">
            <div class="col-md-offset-3">
                <div class="signup-form"><!--sign up form-->
                    <h2 class="text-danger msg">
                        <?php
                            if(isset($_SESSION['msg'])) {
                                echo($_SESSION['msg']);
                                unset($_SESSION['msg']);
                            }
                            if(isset($_SESSION['errors'])) {
                                $errors = $_SESSION['errors'];
//                                print_r($errors);
                                unset($_SESSION['errors']);
                            }
                        ?>
                    </h2>
                    <form action="" method="post" id="loginForm">
                        <div class="form-group col-md-8">
                            <label for="user_name">User Name:</label>
                            <input type="text" name="user_name" id="user_name" value="<?php echo($obj_user->user_name);  ?>" class=" form-control" placeholder="User Name">
                            <span class="user_name text-danger help-block">
                                <?php
//                                if(isset($_SESSION['errors']['user_name']))
                                if(isset($errors['user_name'])) {
                                    echo($errors['user_name']);
//                                    unset($_SESSION['errors']['user_name']);
                                }
                                ?>
                            </span>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password" class=" form-control" placeholder="Password ">
                            <span class="password text-danger help-block">
                                <?php
                                    if(isset($errors['password'])) {
                                        echo($errors['password']);
                                    }
                                ?>
                            </span>
                        </div>
                        <div class="form-group col-md-8" style="">
                            <label for="remember">Remember Me:</label>
                            <input type="checkbox" name="remember" value="remember" class="form-control">
                        </div>
                        <div class="form-group col-md-2 col-md-offset-3">
                            <input type="submit" value="Login" class="btn-primary" id="btnLogin">
                        </div>
                        
                    </form>
                </div><!--/sign up form-->
            </div>
    </div>
</section><!--/form-->
<?php

require_once 'views/footer.php';
?>
<script>
$(document).ready(function(e) {
   $("#btnLogin").click(function(e) {
       $(".help-block").html("");
       e.preventDefault();
//       var user_name = $("#user_name").val();
//       var password = $("#password").val();
////       alert(user_name);
//       var data = {
//           user_name:user_name,
//           password:password,
//       };
        var data = $("#loginForm").serializeArray();
       $.ajax({
          url:"<?php echo(BASE_URL); ?>process/process_login.php",
          data:data,
          dataType:'JSON',
          type:'POST',
          complete:function(jqXHR,textStatus) {
              if(jqXHR.status == 200) {
                  var result = JSON.parse(jqXHR.responseText);
                  if(result.hasOwnProperty('success')) {
                      $(".msg").html(result.msg);
                      $(".msg").append(ajax_loader);
                      setTimeout(function() {
                          window.location = "<?php echo(BASE_URL); ?>index.php";
                      },2000);
                  } else if(result.hasOwnProperty('error')) {
                      $(".msg").html(result.msg);
//                      $(".user_name").html(result.errors.user_name);
//                      $(".password").html(result.errors.password);
                        
                        $.each(result.errors,function(index,error) {
                           $("."+index).html(error);
                        });
                  }
              }
          }
       });
       
   });
});
</script>