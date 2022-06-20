
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>zarejesruj_stekop</title>
    <link rel="stylesheet" href="zarejestruj.css">
</head>
<body>

<form action="/action_page.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="login"><b>Login</b></label>
    <input type="text" placeholder="Enter Login" name="login" id="login" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="baza.html">Sign in</a>.</p>
  </div>
</form>

</body>
</html>