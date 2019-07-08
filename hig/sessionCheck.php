<?php
 require("./private/dbaccess.php");

$userID = $_POST["userID"];
$instanceID= $_POST["instanceID"];

$sql = "SELECT * FROM User device_id='".$instanceID."' WHERE username='".$userID."'";
$response = array();
$response["success"] = $conn->query($sql);
echo json_encode($response);

$conn->close();