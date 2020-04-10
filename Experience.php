<?php
include 'DB.php';
$sql = "SELECT * FROM experiences";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $str = "<li class=".'"list-group-item"'.">
        <h5>".$row['title'];
        if(strlen($row['desc_title'])>0){
            $str.="<small> - ".$row['desc_title']."</small>";
        }
        $str .="
        </h5>";
        if(strlen($row['description'])>0){
            $str.="<p class=".'"m-0"'.">".$row['description']."
            </p>";
        }
       $str.="
    </li>";
    echo $str;
    }
} else {
    echo "0";
}