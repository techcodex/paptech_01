<?php
require_once 'models/User.php';
require_once 'models/Location.php';
require_once 'models/Cart.php';
require_once 'views/header.php';
$obj_user->profile();
?>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <tr class="">
        <td colspan="2"><center>My Account Data</center></td> 
    </tr>
    <tr>
        <td>First Name</td>
        <td>
            <?php
                if($obj_user->first_name == "") {
                    echo("N/A");
                } else {
                    echo($obj_user->first_name);
                }
                
            ?>
        </td>
    </tr>
    <tr>
        <td>Middle Name</td>
        <td>
            <?php
                if($obj_user->middle_name == "") {
                    echo("N/A");
                } else {
                    echo($obj_user->middle_name);
                }
                
            ?>
        </td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td>
            <?php
                if($obj_user->last_name == "") {
                    echo("N/A");
                } else {
                    echo($obj_user->last_name);
                }
                
            ?>
        </td>
    </tr>
    <tr>
        <td>Contact No</td>
        <td>
            <?php
                echo($obj_user->contact_number);
            ?>
        </td>
    </tr>
    <tr>
        <td>Gender</td>
        <td>
            <?php
                if($obj_user->gender == "") {
                    echo("N/A");
                } else {
                    echo($obj_user->gender);
                }
                
            ?>
        </td>
    </tr>
    <tr>
        <td>Date Of Birth</td>
        <td>
            <?php
                echo($obj_user->date_of_birth);
            ?>
        </td>
    </tr>
    <tr>
        <td>Street Address</td>
        <td>
            <?php
                echo($obj_user->street_address);
            ?>
        </td>
    </tr>
    <tr>
        <td>Country</td>
        <td>
            <?php
            echo($obj_user->country_name);
            ?>
        </td>
    </tr>
    <tr>
        <td>State</td>
        <td>
            <?php
                echo($obj_user->state_name);
            ?>
        </td>
    </tr>
    
    <tr>
        <td>City</td>
        <td>
            <?php
                echo($obj_user->city_name);
            ?>
        </td>
    </tr>
    <tr>
        <td><center><a href="<?php echo(BASE_URL); ?>change_password.php">Reset Password</a></center></td>
        <td><center><a href="<?php echo(BASE_URL); ?>update_account.php">Update Account</a></center>
        <center><a href="<?php echo(BASE_URL); ?>change_profile_picture.php">Change Profile Picture</a></center>
        </td>
    </tr>
</table>
</div>

<?php
require_once 'views/footer.php';
?>