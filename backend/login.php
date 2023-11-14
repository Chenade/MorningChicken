<?php

include_once("connect.php");

$return_val = array("success" => true);
// $_POST['cart'] = json_encode($_POST['cart'], JSON_UNESCAPED_UNICODE);

$sql = "SELECT * FROM `restaurant` WHERE `name` = '".$_POST['restaurant']."' AND `password` = '".$_POST['password']."'";
$result = $conn->query($sql);
if ($result === false || $result->num_rows <= 0) {
    // echo "Error executing the query: " . $conn->error;
    $return_val = array("success" => false);
}
$conn->close();

echo json_encode($return_val);

?>