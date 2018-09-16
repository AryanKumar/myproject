<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="login.css">

    <title>Login | ABC RESTAURANT</title>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <div class="container">
        <a href="#" class="navbar-brand">ABC RESTAURANT</a>
      </div>
    </nav>
    
    <!-- Login with website -->
    <div class="container">
      <div class="box">
        <h2>Login</h2>
        <p class="text-danger"><?php if(isset($_SESSION['error'])){ echo $_SESSION['error']; } unset($_SESSION['error']);?></p>
        <hr id="hr-1">
        <form action="db.php" method="post">
          <div class="form-group">
            <label>User name</label>
            <input type="text" class="form-control" placeholder="Enter Username" name="uname" required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Enter Password" name="psw" required>
          </div>
          <div class="login-options">
            <div class="remember-me">
              <input type="checkbox" name="remember">
              <label>Remember Me</label>
            </div>
            <input type="submit" value="Login" name="submit" class="btn btn-success"/>
           
          </div>
        </form>
        <hr>
        <a href="#">Forgot Password?</a>
        <a href="#" id="create-account">Create Account</a>
        <hr class="hr-or">
        <div class="social">
          <button class="btn" id="facebook"><img src="./images/facebook-white.jpg">facebook</button>
          <button class="btn" id="google"><img src="./images/google-btn.png">Google</button>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>