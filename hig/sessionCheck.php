<?php
 require("./private/dbaccess.php");

$userID = $_POST["userID"];
$instanceID= $_POST["instanceID"];

$sql = "SELECT * FROM User WHERE device_id='".$instanceID."' AND username='".$userID."'";
$result= $conn->query($sql);
$arr = array('success'=>false);
if($row = $result->fetch_assoc())
{
    $arr['success'] = true;
}

echo json_encode($arr);

$conn->close();