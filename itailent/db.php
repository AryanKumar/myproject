<?php
    require "config.php";
    session_start();
    if(isset($_POST['submit'])){
        session_start();
        $name = $_POST['uname'];
        $pas = $_POST['psw'];
        $sql = "SELECT  `srno`,`username`, `password` FROM `employees` WHERE `username` = '$name' && `password` = '$pas'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1){
            while($row = mysqli_fetch_assoc($result)) {
                $_SESSION['flag'] = "ok";
                $_SESSION['srno'] = $row["srno"];
                $_SESSION['username'] = $row["username"];
            }
            header('LOCATION:dashboard.php'); 
        } else {
            $_SESSION['error'] = "User name or password mismatch";
            header('LOCATION:index.php'); 

        }
        $conn->close();
    }

    if(isset($_POST['addorder'])){
        $orderitem = $_POST['atm'];
        $quant = $_POST['quant'];
        $tot = $_POST['tot'];
        $orderprice = $_POST['orderitem'];
        $empid = $_SESSION['srno'];
        $uname = $_SESSION['username'];
        $orderDate = date("Y-m-d");
        $sql = "INSERT INTO `orders`(`emplyId`, `ordername`, `quantity`, `orderprice`, `total`, `empName`, `date`) VALUES ( $empid,'$orderitem', $quant ,$orderprice, $tot,'$uname', '$orderDate')";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['orderadd'] = "Order added successfully";
            header('LOCATION:dashboard.php'); 
        } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
        $conn->close();
    }
?>