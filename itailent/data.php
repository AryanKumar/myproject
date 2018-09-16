<?php
    require "config.php";
    session_start();
    $empid = $_SESSION['srno'];
    $sql = "SELECT sum(total) as sum , sum(quantity) as qunty , `date` FROM `orders` WHERE `emplyId` = $empid GROUP BY `date` ORDER BY `date`";
    $result = mysqli_query($conn, $sql);
    $dataPoints = [];
    $dataforBar = [];
    $dataforPie = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $date = $row['date'];
        $total = $row['sum'];
        $q = $row['qunty'];
       
        $dataforBar[] = array("y" => $total, "label" => $date);
    }


    $piechart = "SELECT sum(quantity) as quantity , sum(total) as tot , `ordername` FROM `orders` WHERE `emplyId` = $empid GROUP BY `ordername` ORDER BY `ordername`";
    $presult = mysqli_query($conn, $piechart);
    while ($row = mysqli_fetch_assoc($presult)) {
        $q = $row['quantity'];
        $ordername = $row['ordername'];
        $dataforPie[] = array("y" => $q, "label" => $ordername );
        $dataPoints[] = array("y" => $q, "label" => $ordername);
    }
   
    /*echo '<pre>';
        print_r($dataforPie);
    echo '</pre>';*/
    ?>
