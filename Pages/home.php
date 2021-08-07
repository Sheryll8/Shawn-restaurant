<?php
    session_start();
    $number = $_SESSION['EMPLOYEE_NUMBER'];
    $name = $_SESSION['EMPLOYEE_NAME'];
    $zone = $_SESSION['ZONE'];
    //echo '<h2>Number is ' .htmlspecialchars($number) . '</h2>';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/login/css/home.css">
    <title>Home</title>
    <style>
        body{
            background-image: url("http://localhost/login/pics/rest.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            object-fit: contain;
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

    <?php

    if (isset($_POST['btn_type'])) {
        $type = $_POST['type'];
        session_start();
        $_SESSION['PRODUCT_TYPE'] = $type;
        header('Location: http://localhost/login/pages/products.php');
    }

    ?>

    <div class="tiles">
        <div class="rows">
            <div class="top">
                <div class="cardOne">
                    <div class="inner">
                        <div class="bev">
                        <form method="post" class="formClick">
                            <input type="hidden" name="type" id="" value="Beverage">
                            <input type="submit" value="Beverages" name="btn_type" class="lnkAll">
                        </form>
                        </div>
                    </div>
                </div>
                <div class="cardOne">
                <div class="inner1">
                        <div class="bev1">
                            <form method="post" class="formClick">
                                <input type="hidden" name="type" id="" value="Beverage">
                                <input type="submit" value="Beverages" name="btn_type" class="lnkAll">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bot">
                <div class="cardTwo">
                    <div class="inner2">
                        <div class="bev2">
                                <form method="post" class="formClick">
                                    <input type="hidden" name="type" id="" value="Beverage">
                                    <input type="submit" value="Beverages" name="btn_type" class="lnkAll">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="cardTwo">
                        <div class="inner3">
                            <div class="bev3">
                                <form method="post" class="formClick">
                                    <input type="hidden" name="type" id="" value="Beverage">
                                    <input type="submit" value="Beverages" name="btn_type" class="lnkAll">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <?php

    echo ''

    ?>

    <script>
        function myProd(x){
            document.cookie = "type_cookie=hello";
            alert(document.cookie);
            sessionStorage.setItem("key", x);
            var out = sessionStorage.getItem("key");
            //var ses = '<?php session_start(); $typ = $_COOKIE['type_cookie']; $_SESSION['TYPE'] = $typ; echo $typ; ?>';
            //alert(ses);
        }
    </script>
</body>
</html>