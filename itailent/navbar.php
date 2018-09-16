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