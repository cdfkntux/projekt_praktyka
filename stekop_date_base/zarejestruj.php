
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>zarejesruj_stekop</title>
    <link rel="stylesheet" href="zarejestruj.css">
</head>
<body>

<form action="server.php" method="post">   
  <div class="container">
    <h1>Register</h1>
    <?php if (isset($_GET['error'])){?>
      <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
      <?php if (isset($_GET['success'])){?>
      <p class="success"><?php echo $_GET['success']; ?></p>
      <?php } ?>

      <label for="name"><b>name</b></label>
      <?php if (isset($_GET['name'])){?>
      <input type="text" 
        placeholder="Enter name" 
        name="name" 
        id="name"
        value="<?php echo $_GET['name']; ?>"
        required>
      <?php }else{ ?>
        <input type="text" 
          placeholder="Enter name" 
          name="name" 
          id="name" 
          required>

          
        <?php }?>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="login"><b>login</b></label>
    <input type="login" placeholder="Enter login" name="login" id="login" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="passwordR" id="passwordR" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>
</body>
</html>

