    <?php require "data.php"; ?>  
     <!DOCTYPE HTML>
     <html>
     <head>
        <link href="librery/style.css" rel="stylesheet"/>
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="account.css">
        <link href="librery/bootstrap.min.css" rel="stylesheet"/>
        <script src="librery/bootstrap.min.js"></script>
     <script>
         
        /*************************line graph*********************************/ 
        window.onload = function () {
        
        var chart = new CanvasJS.Chart("line", {
            title: {
                text: "Product wise sale"
            },
            axisY: {
                title: "Quantity"
            },
            data: [{
                
                type: "bar",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();
        /*********************************bar chart****************************************** */
        var barchart = new CanvasJS.Chart("bar", {
            title: {
                text: "Datewise Seles "
            },
            axisY: {
                title: "Total Amount"
            },
            data: [{
                type: "line",
                dataPoints: <?php echo json_encode($dataforBar, JSON_NUMERIC_CHECK); ?>
            }]
        });
        barchart.render();


        /*************************pie chart************************** */
        var piechart = new CanvasJS.Chart("piechart", {
            animationEnabled: true,
            title: {
                text: "Products sold by quantity"
            },
            subtitles: [{
                text: "Quantity"
            }],
            data: [{
                type: "pie",
                yValueFormatString: "#,##0.00\"%\"",
                indexLabel: "{label} ({y})",
                dataPoints: <?php echo json_encode($dataforPie, JSON_NUMERIC_CHECK); ?>
            }]
        });
        piechart.render();    
    }
     </script>
     </head>
     <body><?php
     if(isset($_SESSION['flag'])) { 
        if(($_SESSION['flag'] === "ok")){
            require "navbar.php";?>
        

            <div class="container">    
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-md-6 col-12 linechart">
                        <div id="line" style="height: 370px;" ></div>
                    </div>
                    
                    <div class="col-lg-6 col-sm-12 col-md-6 col-12 barchart">
                        <div id="bar" style="height: 370px;" ></div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-6 col-12 piechart">
                        <div id="piechart" style="height: 370px;"></div>
                    </div>
                </div>
            </div>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script><?php
        } 
    }else{
        $_SESSION['error']="Log in First";
        header('LOCATION:index.php');
    }?>  
     </body>
     </html>  