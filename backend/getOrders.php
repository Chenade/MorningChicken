<?php
include_once("connect.php");

if (!isset($_GET['restaurant']))
    $restaurant = '';
else
    $restaurant = $_GET['restaurant'];

$sql = "SELECT * FROM orders WHERE restaurant = '" . $restaurant . "'";

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
