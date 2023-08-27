<?php
include_once("connect.php");

if (!isset($_GET['id']))
    $id = 1;
else
    $id = $_GET['id'];

$sql = "SELECT * FROM restaurant WHERE id = " . $id;
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
