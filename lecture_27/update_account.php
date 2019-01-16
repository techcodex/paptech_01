<?php
require_once 'views/header.php';
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

                <form action="<?php echo(BASE_URL); ?>process/process_update_account.php" method="post">
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
                        <label for="email">Gender:</label>
                        <div>
                            <label>Male: <input type="radio" name="gender[]" style="height: 15px;" <?php if ($obj_user->gender == "male") echo("checked") ?> value="male" ></label>
                            <label> &nbsp;&nbsp;&nbsp;Female: <input type="radio" name="gender[]" style="height: 15px;" value="female" <?php if ($obj_user->gender == "female") echo("checked"); ?>></label>
                        </div>
                        <span class="text-danger">
                            <?php
                            if (isset($errors['gender'])) {
                                echo($errors['gender']);
                            }
                            ?>
                        </span>

                    </div>

                    <div class="from-group col-md-8">
                        <label for="password">Date Of Birth:</label>
                        <input type="date" name="date_of_birth" id="date" class="password form-control" value="">
                        <span class="password text-danger">
                            <?php
                            if (isset($errors['date_of_birth'])) {
                                echo($errors['date_of_birth']);
                            }
                            ?>
                        </span>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="password">Street Address:</label>
                        <textarea cols="20" rows="5" class="form-control">
                            <?php
                            if (!$obj_user->street_address == null) {
                                echo($obj_user->street_address);
                            }
                            ?>
                        </textarea>
                        <span class="password text-danger">
                            <?php
                            ?>
                        </span>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="password">Country:</label>
                        <select class="form-control" name="country_id" id="country_id">
                            <option value="">--Select Country --</option>
                            <?php
                            $countries = Location::countries();
                            //country['id'];
                            foreach ($countries as $country) {
                                echo("<option value='" . $country->id . "'>" . $country->country_name . "</option>");
                            }
                            ?>
                        </select>
                        <span class="password text-danger">
                            <?php
                            ?>
                        </span>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="password">State:</label>
                        <select class="form-control" name="state_id" id="state_id">
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
<?php ?>
                        </span>
                    </div>

                    <div class="form-group col-md-8">
                        <label for="password">Profile Image:</label>
                        <input type="file" name="profile_image"  class="form-control">
                        <span class="password text-danger">
<?php ?>
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
    $(document).ready(function (e) {
        var date = new Date();
        var month = date.getMonth();
        var fullDate = date.getDate();
        if (month < 13)
            month = month + 1;
        if (month < 10)
            month = '0' + month;
        if (fullDate < 10)
            fullDate = '0' + fullDate;
        console.log(date.getFullYear() + "-" + month + "-" + fullDate);
        $("#date").val(date.getFullYear() + "-" + month + "-" + fullDate);
    });
    /*
     var country_id = document.getElementById('country_id');
     country_id.on('change',function() {
     
     })
     */
    $(document).ready(function (e) {
        $("#country_id").change(function (e) {
            var country_id = $("#country_id").val();
            if (country_id == "") {
                return;
            }
            /*
             * 
             var data = {
             user_name:'sohaib',
             email:'sohaib@yahoo.com',
             };
             */
            var data = {
                id: country_id,
                action: 'get_states',
            };
//       var data = $("#user_form").serializeArray();
            //async js and xml
            $.ajax({
                url: "<?php echo(BASE_URL); ?>process/process_location.php",
                type: 'POST',
                dataType: 'JSON',
                data: data,
                /*
                 success:function (xhr) {
                 },
                 error:function (xhr) {
                 }
                 */
                complete: function (jqXHR, textStatus) {
                    if (jqXHR.status == 200) {
                        var result = jqXHR.responseText;
                        result = JSON.parse(result);
                        if(result.hasOwnProperty('success')) {
                            if(result.hasOwnProperty('states')) {
                                var states = result.states;
                                var output = "";
                                /*
                                states.forEach(function(state) {
                                    console.log(state.state_name);
                                }) 
                                  */  
                                $.each(states,function(index,state) {
                                    output += "<option value='"+state.state_id+"'>"+state.state_name+"</option>";
                                });
                                //<option value = '1'>Punjab</option>
                                //<option value='2'>sindh</option>
                                $("#state_id > option~option").remove();
                                $("#state_id").append(output);
                            } else {
                                alert("States Not Found");
                            }
                        }
                    } else {
                        alert("Something Went Wrong Contact Admin");
                    }
                }
            });
        })
    });
</script>