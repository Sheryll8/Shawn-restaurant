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
            <h2 class="typeTitle">Beverages</h2>
            <table class="prodsTable">
                <tr>
                    <th class="headerImage">Product Image</th>
                    <th class="headerName">Product Name</th>
                    <th class="headerPrice">Product Price</th>
                    <th class="headerQuantity">Quantity</th>
                </tr>
                <?php 
                include_once("connection.php");
                $sql = "SELECT * FROM product WHERE PRODUCT_TYPE='$prodType'";
                $result = mysqli_query($conn, $sql);
                $prodArray = array();
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) { 
                        echo '
                            <tr>
                            <td class="dataImage"><img src="http://localhost/'. $row["PRODUCT_IMAGE"] .'" alt="" class="imgData"></td>
                            <td class="dataName">'. $row["FOOD_PRODUCT"] .'</td>
                            <td class="dataPrice">'. $row["PRODUCT_PRICE"] .'</td>
                            <td class="dataQuantity">'. $row["QUANTITY"] .'</td>
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