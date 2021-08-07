<?php

if (isset($_REQUEST["EMPLOYEE_NAME"]) && isset($_REQUEST["EMPLOYEE_NUMBER"]) && isset($_REQUEST["ZONE"])) {
    include_once("connection.php");
    $name = $_REQUEST["EMPLOYEE_NAME"];
    $number = $_REQUEST["EMPLOYEE_NUMBER"];
    $zone = $_REQUEST["ZONE"];

    $sql = "SELECT * FROM waitertable WHERE ='$name' AND EMPLOYEE_NUMBER='$number' AND ZONE='$zone'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['EMPLOYEE_NAME'] = $name;
        $_SESSION['EMPLOYEE_NUMBER'] = $number;
        $_SESSION['ZONE'] = $zone;
        header("Location: http://localhost/cookery/pages/home.php");
    }
    else{
        echo "Not Successfull";
    }
}
else {
    echo "Parameter Missing";
}


?>