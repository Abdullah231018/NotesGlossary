<?php 
session_start();
include 'database.php';
$obj = new database();

if(isset($_GET['useremail'])) {
    $useremail = $_GET['useremail'];
	$password  = md5($_GET['password']);
    
    $result = $obj->login($useremail,$password);
    $i = mysqli_num_rows($result);

    if ($i > 0) {

        $user_info= mysqli_fetch_assoc($result);
        $_SESSION['uid'] = $user_info;

    } else {
    	echo "Credentials were not valid.";
    }

}
else if(isset($_GET['user_name'])) {
    $user_name      = $_GET['user_name'];
    $useremail      = $_GET['useremails'];
    $password       = md5($_GET['passwords']);
     
    $result = $obj->registrationcheck($useremail);
    $i = mysqli_num_rows($result);

    if ($i > 0) { 
        echo "Please Enter Different Email address";

    } else {
        $result = $obj->registration($user_name,$useremail,$password);
        echo "Registration Successfully";
    }

}

?>