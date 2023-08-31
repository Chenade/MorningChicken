<?php
include_once("connect.php");

if (!isset($_GET['city']))
    $city = 1;
else
    $city = $_GET['city'];

$sql = "SELECT * FROM restaurant WHERE city = " . $city;
$result = $conn->query($sql);
if ($result === false) {
    // echo "Error executing the query: " . $conn->error;
} else {

    $rows = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    }
}

$conn->close();
echo json_encode($rows);
?>
