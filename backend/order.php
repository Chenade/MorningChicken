<?php

include_once("connect.php");

$result = array("success" => true);
$_POST['cart'] = json_encode($_POST['cart'], JSON_UNESCAPED_UNICODE);

$sql = "INSERT INTO `orders`(`name`, `phone`, `restaurant`, `cart`, `pickup`) VALUES ('" . $_POST['name'] . "', '" . $_POST['phone'] . "', '" . $_POST['restaurant_name'] . "', '" . $_POST['cart'] . "', '" . $_POST['time'] . "')";
$result = $conn->query($sql);
if ($result === false) {
    // echo "Error executing the query: " . $conn->error;
    $result = array("success" => false);
    array_push($result, array('error' => $conn->error));
} else {
    // echo "Order added successfully";
}

$conn->close();

echo json_encode($result);

?>