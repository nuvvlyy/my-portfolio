<?php
include 'DB.php';
$sql_my = "SELECT * FROM profile";
$result_my = $conn->query($sql_my);

if ($result_my->num_rows > 0) {
    // output data of each row
    while($row = $result_my->fetch_assoc()) {
        $str ="<li><h1 class=".'"text-uppercase "'.">".$row['name']."</h1></li><li><h1 class=".'"text-uppercase "'.">".$row['last_name']."</h1></li>";

    echo $str;
    }
} else {
    echo "0";
}