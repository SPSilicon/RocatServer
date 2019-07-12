<?php
 require_once("./private/dbaccess.php");
// 로그아웃할 시, 아이디에 등록된 device_id(instance_id) 제거
 $user_id = $_POST["userID"];
 $device_id = $_POST["deviceID"];

$sql = "UPDATE User SET device_id=NULL WHERE device_id='".$device_id."' AND username = '".$user_id."'";
$response = array();
$result = $conn->query($sql);
if($conn->affected_rows > 0)     // 1열이상 적용될 시,
$response["success"] = true;
else
$response["success"] = false;
echo json_encode($response);

