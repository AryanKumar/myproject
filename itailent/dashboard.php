<?php 
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="account.css">

    <title>Account | ABC Restauratnt</title>
    <style>
        .Aorder.btn.btn-primary:hover {
            background-color: #343A40;
        }
        .viewrpt.btn.btn-primary:hover{
             background-color: #343A40;
        }
    </style>
  </head>
  <body>
  <?php 
    if(isset($_SESSION['flag'])) { 
        if(($_SESSION['flag'] === "ok")){ ?>
    
            <!-- Navbar -->
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container">
                <div id="left-dropdown">
                <button class="dropbtn">
                    <img src="images/dots.png">
                </button>
                <div class="dropdown-content navbar-dark bg-dark">
                    <ul>
                    <a href="addorder.php">Add Order</a>
                    <a href="viewreport.php">View report</a>
                    <a href="logout.php">Log Out</a>
                    </ul>
                </div>
                </div>
                <a href="dashboard.php" class="navbar-brand">ABC Restaurant</a>
                <div id="right-dropdown">
                <img src="images/default_avatar.png">
                <div class="right-content navbar-dark bg-dark">
                    <div id="right">
                    <p class="unames">Welcome <?php echo $_SESSION['username']; ?></p>
                    <p class="emails"><?php echo $_SESSION['username']."@gmail.com"; ?></p>
                    <p><a href="logout.php" class="logout">Log Out</a></p>
                    </div>
                </div>
                </div>        
            </div>
            </nav>
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <span><?php if(isset($_SESSION['orderadd'])){ echo $_SESSION['orderadd'];} unset($_SESSION['orderadd']); ?></span>
                    <h3 class="heading text-center">Welcome <span class="text-danger"><?php echo $_SESSION['username']; ?></span></h3>
                </div>
                <div class="row">
                    <div class="text-center col-lg-6 col-md-6 col-sm-4 col-4" >
                        <a href="addorder.php" class="Aorder btn btn-primary">Add Orders</a>
                    </div>
                    <div class="text-center col-lg-6 col-md-6 col-sm-6 col-6">
                        <a href="viewreport.php" class=" viewrpt btn btn-primary">Vie Report</a>
                    </div>
                </div>
            </div>

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script><?php
        } 
    }else{
        $_SESSION['error']="Log in First";
        header('LOCATION:index.php');
    }
    ?>  
        
  </body>
</html>