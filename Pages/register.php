<?php

include_once("connection.php");
$name = $_REQUEST["EMPLOYEE_NAME"];
$number = $_REQUEST["EMPLOYEE_NUMBER"];
$zone = $_REQUEST["ZONE"];

$sql = "INSERT INTO waiter (NAME, EMPLOYER_NO, ZONE) VALUES ('$name','$number','$zone')";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: http://localhost/login/home.php")
}
else{
    echo "Not Successfull";
}

?>