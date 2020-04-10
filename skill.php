<?php
include 'DB.php';
$sql_skill = "SELECT * FROM skill";
$result_skill = $conn->query($sql_skill);


if ($result_skill->num_rows > 0) {
    // output data of each row
    while($row = $result_skill->fetch_assoc()) {
        $str = "<li class=".'"list-group-item"'.">
        <h6>
            ".$row['name_skill'].":  ".$row['desc_skill']."
        </h6></li>";
    echo $str;
    }
} else {
    echo "0";
}