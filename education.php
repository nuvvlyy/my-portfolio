<?php
include 'DB.php';
$sql_edu = "SELECT * FROM education";
$result_edu = $conn->query($sql_edu);

if ($result_edu->num_rows > 0) {
    // output data of each row
    while($row = $result_edu->fetch_assoc()) {
        $str = "<li class=".'"list-group-item"'."><h4>".$row['school']." <small> ".$row['duration']." </small></h4>";
        if(strlen($row['branch'])>0){
            $str.="<p class=".'"m-0"'.">".$row['branch']."</p>";
        }
        if(strlen($row['GPA']>0)){
            $str .= "<p class=".'"m-0"'."> GPA :".$row['GPA']."
            </p>";
        }
        $str.="</li>";
    echo $str;
    }
} else {
    echo "0";
}