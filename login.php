<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname'])&& isset($_POST['password'])) {
	// 
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: signin.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: signin.php?error=Password is required");
	    exit();
	}else{
		// hashing the password

        // $pass = md5($pass);

        
		$sql = "SELECT * FROM users WHERE uname='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if($row['uname'] == 'Admin' && $row['password'] == 'admin'){
				$adminname = "Admin";
				$_SESSION['uname']=$adminname;
				$_SESSION['type'] = 'admin';
				// $_SESSION['name'] = $row['name'];
            	// $_SESSION['email'] = $row['email'];
				header('location:admin.php');
			}
            else if ($row['uname'] === $uname && $row['password'] === $pass && $row['type'] === 'cust' ) {
            	// $_SESSION['user_name'] = $row['user_name'];
				$_SESSION['uname'] = $row['uname'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['email'] = $row['email'];
				$_SESSION['type'] = 'cust';
            	header("Location: home/cust.php");
		        exit();
            }
			else if ($row['uname'] === $uname && $row['password'] === $pass && $row['type'] === 'ngo' ) {
            	// $_SESSION['user_name'] = $row['user_name'];
				$_SESSION['uname'] = $row['uname'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['email'] = $row['email'];
				$_SESSION['type'] = 'ngo';
            	header("Location: home/ngo.php");
		        exit();
            }
			else if ($row['uname'] === $uname && $row['password'] === $pass && $row['type'] === 'vet' ) {
            	// $_SESSION['user_name'] = $row['user_name'];
				$_SESSION['uname'] = $row['uname'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['email'] = $row['email'];
				$_SESSION['type'] = 'vet';
            	header("Location: home/vet.php");
		        exit();
            }
			else if ($row['uname'] === $uname && $row['password'] === $pass && $row['type'] === 'store' ) {
            	// $_SESSION['user_name'] = $row['user_name'];
				$_SESSION['uname'] = $row['uname'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['email'] = $row['email'];
				$_SESSION['type'] = 'store';
            	header("Location: home/store.php");
		        exit();
            }

			
			
			
			else{
				header("Location: signin.php?error=Incorect username name or password");
		        exit();
			}
		}else{
			header("Location: signin.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: signin.php");
	exit();
}