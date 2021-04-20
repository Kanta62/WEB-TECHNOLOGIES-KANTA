<?php 


require_once 'db_connect.php';

$conn = db_conn();
$selectQuery = 'SELECT * FROM `studensinfo` ';
$result = $conn->query($query);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $output =  '<li>'.$row["NAME"].'</li>';
    }
} else {
    $output =  'no result';
}

echo $output;
