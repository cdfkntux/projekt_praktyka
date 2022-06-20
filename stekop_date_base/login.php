<!DOCTYPE html>
<head>
    <title>baza_stekop</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="baza.css">
    <script>
        function login(){
            var value = document.getElementById('inputLogin').value;
            var errorMsg = "";
            if(value.length < 5) {
                //document.getElementById("loginError").innerHTML
                errorMsg = "błędny login(minimum 6 znakow" + "<br>";
                //document.getElementById("loginError").style.display = "inline-block";
            }

            
            value = document.getElementById('inputPassword').value;

            if(value.length < 5 ){
                //document.getElementById("loginError").innerHTML
                errorMsg = errorMsg + "haslo powinno <span style=\"color: red;\">zawierac</span> przynajmniej 6 znakow" + "<br>";
                    
                document.getElementById("loginError").style.display = "inline-block";
                
            }

            // if (!valiadateNumbers(value)){
            //     errorMsg = errorMsg + "haslo musi <b>zawierac</b> cyfrę<br>"
            // }


            if(errorMsg.length > 0){
                //document.getElementById("validateLogin").innerHTML = errorMsg;
                //document.getElementById('validateLogin').style.display = "block";
                 var element = document.getElementById("validateLogin");
                element.innerHTML=errorMsg;
                element.style.display="block";
                return false;
            }
            else {
                //console.writeLine("hgjgj");
                //window.location = "home.php";
                return ;
                }
                
        }

        function valiadateNumbers(txt)
        {
                for (var i =0; i <txt.length;i++){
                    var v =txt[i];
                    if(!isNaN(v)){
                        return true;
                    }
                }
                return false;
            }
    </script>

</head>
<body>
    <header>
        <img src="logo.jpg.svg" alt="stekop">
    </header>
    <div class="center">
       <h1>Login</h1>
       
       <form action="home.php" method="post">
         <div class="txt_field">
            <input id="inputLogin" name = "user" type="text"required> <span id="loginError" style="color: red; display: none;"></span>
            <span></span>
            <label>Username</label>
         </div>
         <div class="txt_field">
            <input id="inputPassword" name="password" type="password"required>
            <span></span>
            <label>Password</label>
         </div>
         <div id="validateLogin" style="color:red; display:none;font-weight:bold"></div>
         <div class="pass"><a href="#">Forgot Password?</a></div>
         <input id="loginBtn" type="submit" value="Login" onclick="return login();">
        <div class="singup_link"></div>
        Not a member? <a href="zarejestruj.php">Signup</a>
    </form>
    <?php
    $serwer = "localhost";
    $user = "root";
    $password = "";
    $db_name = "stekop_logins";
    
    $con = mysqli_connect($serwer,$user,$password,$db_name);
        
        if(mysqli_connect_error()) {
            echo "invalid syntax" .mysqli_connect_error();
            exit();
        }
        if (isset($_GET['error'])) {
            echo "<p>" . $_GET['error'] . "</p>";
        }
    
    ?>
    </div>
</body>
<footer></footer>


    