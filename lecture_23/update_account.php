<?php
require_once 'views/header.php';
?>
<section id="form"><!--form-->
    <div class="container">
            <div class="col-md-offset-3">
                <div class="signup-form"><!--sign up form-->
                    <h2 class="text-danger">
                        <?php
                            
                        ?>
                    </h2>
                    <form action="" method="post">
                        <div class="form-group col-md-8">
                            <label for="user_name">Frist Name:</label>
                            <input type="text" name="frist_name" id="frist_name" value="" class="user_name form-control" placeholder="Frist Name">
                            <span class="user_name text-danger">
                                <?php

                                ?>
                            </span>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="email">Middle Name:</label>
                            <input type="text" name="middle_name" id="middle_name" class="middle_name form-control" placeholder="Middle Name" value="">
                            <span class="email text-danger">
                                <?php
                                   
                                ?>
                            </span>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="email">Last Name:</label>
                            <input type="text" name="last_name" id="last_name" class="middle_name form-control" placeholder="Last Name" value="">
                            <span class="email text-danger">
                                <?php
                                   
                                ?>
                            </span>
                        </div>
                        
                        <div class="form-group col-md-8">
                            <label for="email">Contact No:</label>
                            <input type="text" name="contact_number" id="contact_number" class="contact_number form-control" placeholder="Contact Number" value="">
                            <span class="contact_number text-danger">
                                <?php
                                   
                                ?>
                            </span>
                        </div>
                        
                        <div class="form-group col-md-8">
                            <label for="email">Gender:</label>
                            <div>
                            <label>Male: <input type="radio" name="gender[]" style="height: 15px;"></label>
                            <label> &nbsp;&nbsp;&nbsp;Female: <input type="radio" name="gender[]" style="height: 15px;"></label>
                            </div>
                            
                        </div>
                        
                        <div class="from-group col-md-8">
                            <label for="password">Date Of Birth:</label>
                            <input type="date" name="date_of_birth" id="date" class="password form-control" value="">
                            <span class="password text-danger">
                                <?php
                                    
                                ?>
                            </span>
                        </div>
                        
                        <div class="form-group col-md-8">
                            <label for="password">Street Address:</label>
                            <textarea cols="20" rows="5" class="form-control"></textarea>
                            <span class="password text-danger">
                                <?php
                                    
                                ?>
                            </span>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="password">Country:</label>
                            <select class="form-control" name="country_id">
                                <option value="">--Select Country --</option>
                            </select>
                            <span class="password text-danger">
                                <?php
                                    
                                ?>
                            </span>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="password">State:</label>
                            <select class="form-control" name="state_id">
                                <option value="">--Select State --</option>
                            </select>
                            <span class="password text-danger">
                                <?php
                                    
                                ?>
                            </span>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="password">City:</label>
                            <select class="form-control" name="city_id">
                                <option value="">--Select City --</option>
                            </select>
                            <span class="password text-danger">
                                <?php
                                    
                                ?>
                            </span>
                        </div>
                        
                        <div class="form-group col-md-8">
                            <label for="password">Profile Image:</label>
                            <input type="file" name="profile_image"  class="form-control">
                            <span class="password text-danger">
                                <?php
                                    
                                ?>
                            </span>
                        </div>
                        
                        <div class="form-group col-md-2 col-md-offset-3">
                            <input type="submit" value="Update Account" class="btn-primary">
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
    var date = new Date();
            var month = date.getMonth();
            var fullDate = date.getDate();
            if(month < 13)
                month = month+1;
            if(fullDate < 10)
                fullDate = '0' + fullDate;
            console.log(date.getFullYear() + "-" + month + "-" + fullDate);
            $("#date").val(date.getFullYear() + "-" + month + "-" + fullDate);
})
</script>