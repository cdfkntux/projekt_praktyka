<?php
session_start(); 
include "db_conn.php";

if (isset($_POST['name']) && isset($_POST['password']) 
  &&($_POST['passwordR'])){

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $date_time = date("Y-m-d h:i:s");
    $login =validate ($_POST['login']);
    $name = validate ($_POST['name']);
    $password = validate ($_POST['password']);
    $passwordRepited = validate ($_POST['passwordR']);
    $user_data ='name='.$name.'&name'.$name;
    if(empty($name)) {
        header("location: zarejestruj.php?error=User Name is required $user_data");
        exit();
    }
    else if(empty($login)){
      header("location: zarejestruj.php?error=login is required $user_data");
      exit();
    }
    else if(empty($password)){
        header("location: zarejestruj.php?error=Password is required $user_data");
        exit();
      }
    else if(empty($passwordRepited)){
        header("location: zarejestruj.php?error=Repited Password is required $user_data");
        exit();
      }
      else if($password !==$passwordRepited){
        header("location: zarejestruj.php?error=Password are not the same $user_data");
        exit();
      }

    else{
        $password = md5($password);
      $sql="SELECT * FROM user_tbl WHERE name= '$name' AND login='$login' AND password= '$password' AND type_id=1";

         $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0){
          header("location: zarejestruj.php?error=Password are not the same $user_data");
          exit();
        }else{
          $sql2="INSERT INTO user_tbl(name,password,login,type_id,date_created) Values('$name','$password','$login',1,'$date_time')";
          $result2 = mysqli_query($conn, $sql2);
          if($result2){
            header("location: login.php?succes=account created");
            exit();
          }else{
            header("location: zarejestruj.php?error=unkown$user_data");
            exit();
          }
        }
	}
	
}else{
	header("location: zarejestruj.php?error=wpisz dane!");
            exit();
}

?> 
