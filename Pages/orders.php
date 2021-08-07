<?php
    session_start();
    $number = $_SESSION['EMPLOYEE_NUMBER'];
    $name = $_SESSION['EMPLOYEE_NAME'];
    $zone = $_SESSION['ZONE'];
    $prodType = $_SESSION['PRODUCT_TYPE'];
    //echo '<h2>Number is ' .htmlspecialchars($number) . '</h2>';
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/login/css/home.css">
    <title>Document</title>
    <style>
        table, th, td{
            border: 1px solid orange;
            color: white;
            text-align: center;
            padding: 20px;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <div class="navbar">
            <div class="right">
                <p class="title">Restaurant</p>
            </div>
            <div class="left">
                <?php  echo '<p class="name">' .htmlspecialchars($name) . '</p>';  ?>
                <?php  echo '<p class="zone">' .htmlspecialchars($zone) . '</p>';  ?>
            </div>
        </div>
        <div class="productsTable">
        <div class="tableDiv">
            <h2 class="typeTitle">Orders</h2>
            <table class="prodsTable">
                <tr>
                    <th class="headerName">Client</th>
                    <th class="headerPrice">Order Number</th>
                    <th class="headerQuantity">Cost</th>
                    <th class="headerStatus">Status</th>
                </tr>
                <?php 
                include_once("connection.php");
                $sql = "SELECT * FROM orders";
                $result = mysqli_query($conn, $sql);
                $prodArray = array();
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) { 
                        echo '
                            <tr>
                            <td class="dataName">'. $row["CLIENT"] .'</td>
                            <td class="dataPrice">'. $row["ORDER_NO"] .'</td>
                            <td class="dataQuantity">'. $row["COST"] .'</td>
                            <td class="dataStatus">'. $row["STATUS"] .'</td>
                            </tr>
                            ';
                    }
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>