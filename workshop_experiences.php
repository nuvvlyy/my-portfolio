<?php
include 'DB.php';
$sql_we = "SELECT * FROM workshop_experiences";
$result_we = $conn->query($sql_we);


if ($result_we->num_rows > 0) {
    // output data of each row
    while($row = $result_we->fetch_assoc()) {
        $str = "<li class=".'"list-group-item"'.">
        <h6>
            (".$row['year'].")".$row['name']."
        </h6></li>";
    echo $str;
    }
} else {
    echo "0";
}

