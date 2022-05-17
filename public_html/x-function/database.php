
<?php

//if this [class]-page has included on page, dont start session

if(!isset($_SESSION)){
    session_start();
}

//including trait files
include("registration.php");


final class database {

	//using traits in class [lens]

	use registration;

	//open mysql connection
	
	function conn() {		
		$con=mysqli_connect("localhost","id18945787_notesglossarys","1=n8y%MiP9M$][n<","id18945787_notesglossary") or die("databse not connected");		
		return $con;
	}

	//check database connectivity [not used]
	function checkConnection() {
		if ($this->conn()) {
			echo " [* Database Connected! *] ";
		}
		else {
			echo " [* Database Not Connected! *] ";
		}
	}

}

?>