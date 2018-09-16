<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AddOrder</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="account.css">
    <link href="librery/style.css" rel="stylesheet"/>
    <link href="librery/bootstrap.min.css" rel="stylesheet"/>
    <script src="librery/bootstrap.min.js"></script>
</head>
<body><?php
if(isset($_SESSION['flag'])) { 
    if(($_SESSION['flag'] === "ok")){ 
        require "navbar.php"; ?>
        <div class="outerDiv col-lg-6 col-md-6 col-sm-12 col-xs-12">
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <h4><?php echo "Today is ".'<span class="text-danger">' . date("d/m/Y"). "</span>"; ?></h4><br/>
                    <form action="db.php" method="post">
                        <div class="form-group">
                            <label for="Order">Select Menu:</label>
                            <select name="orderitem" class="form-control form-control-lg" id="selItem" onchange="totalamount()">
                                <option value="0">Add Order</option>
                                <option value="10">Tee</option>
                                <option value="10">Coffee</option>
                                <option value="15">Samosa</option>
                                <option value="15">Cake</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="numer" name="atm" id="atm" class="hide"/>
                        </div>
                        <div class="form-group">
                            <label for="qt">Quantity:</label>
                            <input type="numer" name="quant" value="1" class="form-control" id="qt" onkeyup="totalamount()">
                        </div>
                        <div class="form-group">
                            <label for="tot">Total:</label>
                            <input type="text" name="tot" class="form-control" id="tot" readonly value="0">
                        </div>
                        <input type="submit" name="addorder" value="Add Order" class="btn btn-primary"/>
                    </form> 
                </div>
            <div>
        </div><?php 
    }
}else{ header('LOCATION:index.php'); }?>
</body>
</html>

<script>
    function totalamount(){
        var x = document.getElementById("selItem").selectedIndex;
        var y = document.getElementById("selItem").options;

        var atmtext = y[x].text;
        document.getElementById("atm").value = atmtext;
        console.log(atmtext);
        var sip = y[x].value;

        var qt = document.getElementById("qt").value;
        var total = Number(qt) * Number(sip);
        //alert("Index: " + y[x].index + " is " + total);
        document.getElementById("tot").value = total;
        console.log(total);

    }
</script>