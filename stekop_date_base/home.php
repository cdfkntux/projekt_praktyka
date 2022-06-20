<?php
session_start(); 
include "db_conn.php";

if (isset($_POST['user']) && isset($_POST['password'])){

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    
    $user = validate ($_POST['user']);
    $password = validate ($_POST['password']);

    if(empty($user)) {
        header("location: login.php?error=User Name is required");
        exit();
    }
    else if(empty($password)){
        header("location: login.php?error=Password is required");
        exit();

    }
    else{
         $sql="SELECT * FROM user_tbl WHERE login= '$user' AND password= '$password'";

         $result = mysqli_query($conn, $sql);

        
        if (mysqli_num_rows($result)){
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: main.php");
		        exit();
            }else{
				header("Location: main.php?error=Incorect User name or password");
		        exit();
			}
		}
        else{
			header("Location: main.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: main.php");
	exit();
}
?> 