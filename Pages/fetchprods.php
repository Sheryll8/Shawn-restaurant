<?php

include("connection.php");
$sql = "SELECT * FROM producttable";
$result = mysqli_query($conn, $sql);
$prodArray = array();
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) { 
        $prodArray[] = $row;
    }
}

echo json_encode(array("data" => $prodArray));

?>