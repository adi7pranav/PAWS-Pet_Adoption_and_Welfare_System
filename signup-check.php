<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])&& isset($_POST['email'])&& isset($_POST['type'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$email=validate($_POST['email']);
	$type=validate($_POST['type']);
	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);
	$address = validate($_POST['address']);

	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}
	else if(empty($email)){
        header("Location: signup.php?error=Email is required&$user_data");
	    exit();
	}
	else if(empty($type)){
        header("Location: signup.php?error=Type is required&$user_data");
	    exit();
	}
	else if(empty($address)){
        header("Location: signup.php?error=Address is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        // $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE uname='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(uname,email,password,name,type) VALUES('$uname', '$email','$pass', '$name','$type')";
		   $result2 = mysqli_query($conn, $sql2);
		   if($type=="ngo"){
			$sql3 = "INSERT INTO ngo(nid) VALUES('$uname')";
		   
		   $result3 = mysqli_query($conn, $sql3);
           if ($result2 && $result3) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		   }
		   if($type=="vet"){
			$sql3 = "INSERT INTO vet(vid) VALUES('$uname')";
		   
		   $result3 = mysqli_query($conn, $sql3);
           if ($result2 && $result3) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		   }
		   if($type=="store"){
			$sql3 = "INSERT INTO store(sid) VALUES('$uname')";
		   
		   $result3 = mysqli_query($conn, $sql3);
           if ($result2 && $result3) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		   }
		   else
		   {
		// 	$sql3 = "INSERT INTO users(uname,email,password,name,type) VALUES('$uname', '$email','$pass', '$name','$type')";
		//    $result3 = mysqli_query($conn, $sql3);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		   }
		   
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}