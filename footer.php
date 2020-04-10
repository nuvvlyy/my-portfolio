<?php
include 'DB.php';
$sql_f = "SELECT * FROM profile";
$result_f = $conn->query($sql_f);

if ($result_f->num_rows > 0) {
    // output data of each row
    while($row = $result_f->fetch_assoc()) {
        $str= "<div class=".'"row"'."><div class=".'"col"'."><p class=".'"m-0 text-secondary"'.">email</p><span>".$row['email']."</span></div>";
        $str.= "<div class=".'"col"'."><p class=".'"m-0 text-secondary"'.">tel.</p><span>".$row['tel']."</span></div>";
        $str.= "<div class=".'"col justify-content-end"'."><p class=".'"m-0 text-secondary"'.">address</p><span>".$row['address']."</span></div>";
    echo $str;
    }
} else {
    echo "0";
}