<?php
//session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author SohaiB
 */
date_default_timezone_set("Asia/Karachi");
require_once 'DbTrait.php';
class User {
    use DbTrait;
    //put your code here
    //data members are not public
    private $user_name;
    private $email;
    private $password;
    private $user_id;
    private $loggedin;
    
    private $first_name;
    private $middle_name;
    private $last_name;
    private $gender;
    private $contact_number;
    private $state_id;
    private $country_id;
    private $city_id;
    private $street_address;
    private $date_of_birth;
    
    public function __construct() {
        
    }
    
    public function __set($name, $value) {
        //name = user_name
        //value = sohaib
        $method = "set".$name;
        //setuser_name
        if(!method_exists($this, $method)) {
            throw new Exception("set property $name does'nt Exist");
        }
        $this->$method($value);
//        $this->setuser_name(sohaib)
    }

    public function __get($name) {
        //name = 'property name user_name'
        $method = "get".$name;
        //getuser_name
        if(!method_exists($this, $method)) {
            throw new Exception("get Proerty $name does'nt Exist ");
        }
        return $this->$method();
    }
    private function setUser_id($user_id) {
        if(!is_numeric($user_id) || $user_id <= 0) {
            throw new Exception("Invalid / Missing User ID");
        }
        $this->user_id = $user_id;
    }
    private function getUser_id() {
        return $this->user_id;
    }
    private function getLoggedin() {
        return $this->loggedin;
    }

    private function setUser_name($user_name) {
        //user_name = 'sohaib';
        $reg = "/^[a-z][a-z0-9]{5,19}$/i";
        if(!preg_match($reg, $user_name)) {
            throw new Exception("*Invalid /Missing  User Name");
        }
        $this->user_name = $user_name;
    }
    private function getUser_name() {
       return $this->user_name; 
    }
    private function setFirst_name($first_name) {
        //user_name = 'sohaib';
//        die($first_name);
        $first_name = trim($first_name);
        if($first_name == "" || is_numeric($first_name)) {
            throw new Exception("Invalid / Missing First Name");
        }
        $this->first_name = ucfirst(strtolower($first_name));
    }
    private function getFirst_name() {
       return $this->first_name; 
    }
    private function setLast_name($last_name) {
        //user_name = 'sohaib';
        $last_name = trim($last_name);
        if(empty($last_name) || is_numeric($last_name)) {
            throw new Exception("Invalid / Missing Last Name");
        }
        $this->last_name = ucfirst(strtolower($last_name));
    }
    private function getLast_name() {
       return $this->last_name; 
    }
    private function setMiddle_name($middle_name) {
        //user_name = 'sohaib';
        $middle_name = trim($middle_name);
        if(empty($middle_name) || is_numeric($middle_name)) {
            throw new Exception("Invalid / Missing Last Name");
        }
        $this->middle_name = ucfirst(strtolower($middle_name));
    }
    private function getMiddle_name() {
       return $this->middle_name; 
    }
    private function setGender($gender) {
        $genders = ['male','female'];
        if(!in_array($gender, $genders)) {
            throw new Exception("invalid / Missing Gender");
        }
        $this->gender = $gender;
    }
    private function getGender() {
       return $this->gender; 
    }
    private function setContact_number($contact_number) {
        $reg = "/^\d{1,4}\-\d{3}\-\d{7}$/";
        if(!preg_match($reg, $contact_number)) {
            throw new Exception("Invalid / Missing Contact Number");
        }
        $this->contact_number = $contact_number;
    }
    private function getContact_number() {
        return $this->contact_number;
    }
    
    private function setDate_of_birth($date_of_birth) {
        if(empty($date_of_birth)) {
            throw new Exception("Missing Date of Birth");
        }
        $this->date_of_birth = $date_of_birth;
    }
    private function getDate_of_birth() {
        return $this->date_of_birth;
    }
    private function setStreet_address($street_address) {
        //die("ss".$street_address);
        if(strlen($street_address) < 10) {
            throw new Exception("Missing / Too Short Address");
        }
        $this->street_address = $street_address;
    }
    private function getStreet_address() {
        return $this->street_address;
    }
    private function setCountry_id($country_id) {
        if(!is_numeric($country_id) || empty($country_id)) {
            throw new Exception("Invalid / Missing Country Name");
        }
        $this->country_id = $country_id;
    }
    private function getCountry_id() {
        return $this->country_id;
    }
    private function getCountry_name() {
        $obj_db = self::obj_db();
        $query = "select country_name "
                . " from countries "
                . " where id = $this->country_id ";
        $result = $obj_db->query($query);
        if($obj_db->errno) {
            throw new Exception("Select Error ".$obj_db->errno. $obj_db->error);
        }
        if($result->num_rows == 0) {
            return "n/a";
        }
        $name = $result->fetch_object()->country_name;
        return $name;
    }
    private function setState_id($state_id) {
        if(!is_numeric($state_id) || empty($state_id)) {
            throw new Exception("Invalid / Missing State Name");
        }
        $this->state_id = $state_id;
    }
    private function getState_id() {
        return $this->state_id;
    }
    
    private function getState_name() {
        $obj_db = self::obj_db();
        $query = "select state_name "
                . " from states "
                . " where id = $this->state_id ";
        $result = $obj_db->query($query);
        if($obj_db->errno) {
            throw new Exception("Select Error ".$obj_db->errno. $obj_db->error);
        }
        if($result->num_rows == 0) {
            return "n/a";
        }
        $name = $result->fetch_object()->state_name;
        return $name;
    }
    private function getCity_name() {
        $obj_db = self::obj_db();
        $query = "select city_name "
                . " from cities "
                . " where id = $this->city_id ";
        $result = $obj_db->query($query);
        if($obj_db->errno) {
            throw new Exception("Select Error ".$obj_db->errno. $obj_db->error);
        }
        if($result->num_rows == 0) {
            return "n/a";
        }
        $name = $result->fetch_object()->city_name;
        return $name;
    }
    private function setCity_id($city_id) {
        if(!is_numeric($city_id) || empty($city_id)) {
            throw new Exception("Invalid / Missing City Name");
        }
        $this->city_id = $city_id;
    }
    private function getCity_id() {
        return $this->city_id;
    }

    private function setEmail($email) {
        $reg = "/^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zAZ]\.)+[a-zA-Z]{2,4})$/";
        if(!preg_match($reg, $email)) {
            throw new Exception("*invalid / Missing Email");
        }
        $this->email = $email;
    }
    private function getEmail() {
        return $this->email;
    }
    private function setPassword($password) {
        $reg = "/^[a-z][a-z0-9]{5,15}$/i";
        if(!preg_match($reg, $password)) {
            throw new Exception("Invalid/ Missing Password");
        }
        $this->password = sha1($password);
    }
    private function getPassword() {
        return $this->password;
    }
        private function setProfile_image($profileImage) {
        //$_FILES['profileImage'] - $profileImage;
//        echo("<pre>");
//        print_r($profileImage);
//        echo("</pre>");
//        die;
        if ($profileImage['error'] == 4) {
            throw new Exception("File Missing");
        }

        if ($profileImage['size'] > 500000) {
            throw new Exception("MAX FILE SIZE IS 500K");
        }
        $imgData = getimagesize($profileImage['tmp_name']);
//        var_dump($imgData);
//        echo("<pre>");
//        print_r($imgData);
//        echo("</pre>");
//        die;
        if (!$imgData) {
            throw new Exception("Not a valid Image");
        }
//        if(!$imgData[0] == 300 && $imgData[1] == 400) {
//            throw new Exception("Max Width Must be 500px and height is 300px");
//        }

        if ($profileImage['type'] != "image/jpeg" && $profileImage['type'] != "image/png") {
            throw new Exception("Only jpeg allowed");
        }

        if ($profileImage['type'] != $imgData['mime']) {
            throw new Exception("Corrupt Image");
        }
//        die;
//
        $fileName = $this->user_name . ".jpg";
//        echo($_SERVER['DOCUMENT_ROOT']);
//        die;
        $strPath = $_SERVER['DOCUMENT_ROOT'] . "/paptech/images/users/$this->user_name/$fileName";
//        echo($strPath);
//        die;

        if (!is_dir($_SERVER['DOCUMENT_ROOT'] . "/paptech/images/users")) {
            if (!mkdir($_SERVER['DOCUMENT_ROOT'] . "/paptech/images/users")) {
                throw new Exception("Faield to creat folder users");
            }
        }
        if (!is_dir($_SERVER['DOCUMENT_ROOT'] . "/paptech/images/users/$this->user_name")) {
            if (!mkdir($_SERVER['DOCUMENT_ROOT'] . "/paptech/images/users/$this->user_name")) {
                throw new Exception("Faield to creat folder users/$this->user_name");
            }
        }
        $result = move_uploaded_file($profileImage['tmp_name'], $strPath);
        if (!$result) {
            throw new Exception("Failed to move file");
        }
        $query = "update userprofiles set "
                . " profile_image = '$fileName' "
                . " where user_id = '$this->user_id'";
        $objDB = self::obj_db();
        $result = $objDB->query($query);
    }

    private function getProfile_image() {
        $query = "select profile_image from userprofiles "
                . " where user_id = '$this->user_id'";
        $objDB = self::obj_db();
        $result = $objDB->query($query);
        $data = $result->fetch_object();
        
        
        if (!is_null($data->profile_image)) {
            $uri = "images/users/$this->user_name/$data->profile_image";
        } else {
            $uri = "images/users/default.png";
        }

        return $uri;
    }
    public function password_validate($password) {
        $reg = "/^[a-z][a-z0-9]{5,15}$/i";
        if(!preg_match($reg, $password)) {
            throw new Exception("Invalid / Missing Password");
        }
    }
    public function confirm_password($new_password,$confirm_password) {
        if($new_password != $confirm_password) {
            throw new Exception("Mismatched Password");
        }
    }

    public function singup() {
        $obj_db = self::obj_db();
        //Create Insert
        //not case sensitive 
        /*
            insert into table_name
          (`column_names`,`column_name`)
            values
         * ('value','value')
        */
        /*
        $query = "INSERT into users "
                ."(`id`,`user_name`,`email`,`password`) "
                ." values "
                ." ('NULL','$this->user_name','$this->email','$this->password')";
        */
        
        /*
        $query = "insert into users "
                ." values "
                ." ('NULL','$this->user_name','$this->email','$this->password')";
        
        */
        
        /*
        $query = "INSERT into users "
                ."(`user_name`,`id`,`email`,`password`) "
                ." values "
                ." ('$this->user_name','NULL','$this->email','$this->password')";
        */
        $now = date("Y-m-d H:i:s");
        $query = "INSERT into users "
                ."(`id`,`user_name`,`email`,`password`,`signup_date`) "
                ." values "
                ." ('NULL','$this->user_name','$this->email','$this->password','$now')";
        $obj_db->query($query);
        if($obj_db->errno == 1062) {
            throw new Exception("User Name ".$this->user_name." Already Exist");
        }
        if($obj_db->errno) {
            throw new Exception("Query Insert Error ".$obj_db->errno.$obj_db->error);
        }
        
        $user_id = $obj_db->insert_id;
//        die("User Id".$user_id);
        $query_profile = "INSERT INTO userprofiles "
                        ."(`id`,`user_id`)"
                        ." values "
                        ." (NULL,$user_id)";
        $obj_db->query($query_profile);
        if($obj_db->errno) {
            throw new Exception("profile insert error ".$obj_db->errno.$obj_db->error);
        }
        
    }
    public function login($remember) {
        $obj_db = self::obj_db();
//        var_dump($remember);
//        die;  
        
        //read / select
        //* means all
//        $query_select  = "select * from users";
        /*
        $query_select = "select * from users "
        /*
        $query_select = "select * from users "
                        ." where user_name = '$this->user_name' AND password = '$this->password' ";
         * 
         */
        $query_select = "select * from users "
                ." where user_name = '$this->user_name' ";
        $result = $obj_db->query($query_select);
        if($obj_db->errno) {
            throw new Exception("Db Select Error ".$obj_db->errno.$obj_db->error);
        }
        if($result->num_rows == 0) {
            throw new Exception("User Not Found");
        }
        $user_data = $result->fetch_object();
//        echo("<pre>");
//        print_r($user_data);
//        echo("</pre>");
//        die;
        if($user_data->password != $this->password) {
            throw new Exception("Invalid User Name or Password ");
        }
        $this->user_id = $user_data->id;
        $this->email = $user_data->email;
        $this->password = NULL;
        $this->user_name = $user_data->user_name;
        $this->loggedin = TRUE;
        
        $str_obj = serialize($this);
        $_SESSION['obj_user'] = $str_obj;
        
        if($remember) {
            $expriy = time() + (60*60*24*3);
            setcookie("obj_user", $str_obj, $expriy, "/");
        }
//        $_SESSION['obj_user'] = serialize($this);
        
    }
    public function logout() {  
        if(isset($_SESSION['obj_user'])) {
            unset($_SESSION['obj_user']);
        }
        if(isset($_COOKIE['obj_user'])) {
            setcookie("obj_user","aaa","1","/");
        }
    }
    public function profile() {
        $obj_db = self::obj_db();
        $query = "select u.user_name,u.email,up.* from users u "
                ." JOIN userprofiles up ON u.id = up.user_id"
                ." where u.id = $this->user_id ";
        /*
        $query = "select users.user_name,users.email,userprofiles.* from users "
                ." JOIN userprofiles ON users.id = userprofiles.user_id  "
                ." where users.id = $this->user_id";
         */
        /*
        $query = "select * from userprofiles "
                ." where user_id = $this->user_id";
         * */
        $result = $obj_db->query($query);
        if($obj_db->errno) {
            throw new Exception("Select Error - $obj_db->errno - $obj_db->error");
        }
        $user_data = $result->fetch_object();
//        echo("<pre>");
//        print_r($user_data);
//        echo("</pre>");
//        die;
        $this->first_name = $user_data->first_name;
        $this->last_name = $user_data->last_name;
        $this->middle_name = $user_data->middle_name;
        $this->gender = $user_data->gender;
        $this->contact_number = $user_data->contact_number;
        $this->street_address = $user_data->street_address;
        $this->country_id = $user_data->country_id;
        $this->state_id = $user_data->state_id;
        $this->city_id = $user_data->city_id;
        $this->date_of_birth = $user_data->date_of_birth;
        /*
        first_name = $user_data->first_name
        frist_name  = $user_data['first_name']
        */

    }
    public function update(){
        //die("s".$this->street_address);
        $obj_db = self::obj_db();
        $query = "update userprofiles set "
                ." first_name = '$this->first_name',last_name = '$this->last_name',middle_name = '$this->middle_name',  "
                . " contact_number = '$this->contact_number', date_of_birth = '$this->date_of_birth', gender='$this->gender', "
                . " street_address = '$this->street_address', country_id = $this->country_id, state_id = $this->state_id, "
                . " city_id = '$this->city_id' "
                . " where user_id = $this->user_id ";
        $obj_db->query($query);
        
        if($obj_db->errno) {
            throw new Exception("Update error - ".$obj_db->errno.$obj_db->error);
        }
        
        
    }
    public function update_password($old_password,$new_password) {
        $obj_db = self::obj_db();
        $query = "select password from users "
                ." where id = $this->user_id ";
        $result = $obj_db->query($query);
        if($result->num_rows == 0) {
            throw new Exception("User Not Found");
        }
        $db_old_password = $result->fetch_object()->password;
        if(sha1($old_password) != $db_old_password ) {
            throw new Exception("Invalid Old Password");
        }
        $new_password = sha1($new_password);
        $query_update = "update users set "
                        ." password = '$new_password' "
                        . " where id = $this->user_id ";
        $obj_db->query($query_update);
        if($obj_db->errno) {
            throw new Exception("Dbv update Error - ".$obj_db->errno.$obj_db->error);
        }
        unset($old_password);
        unset($new_password);
    }
    
}

//create a object of type user
