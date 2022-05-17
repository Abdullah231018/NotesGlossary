<?php

/*
[ Used Table Names ]

*/

trait registration {
	
	//test function	
	
	function registration($user_name,$user_email,$user_password){

		$registration=mysqli_query($this->conn(),"insert into users(username,email,password) values('$user_name','$user_email','$user_password')") or die("not registration");

	}

	function login($user_email,$password){

		$sql= mysqli_query($this-> conn(),"select * from users where email = '$user_email' and password ='$password'") or die("login fail");
		return $sql;
		
	}

	function registrationcheck($use_email){

		$sql= mysqli_query($this-> conn(),"select * from users where email='$use_email'") or die("check user fail");
		return $sql;

	}

}

?>