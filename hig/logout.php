<?php
 require_once("./private/dbaccess.php");
// 로그아웃할 시, 아이디에 등록된 device_id(instance_id) 제거
 $user_id = $_POST["userid"];
 $device_id = $_POST["deviceid"];

$sql = "UPDATE User SET device_id=NULL WHERE device_id='".$instanceID."' AND User_id = '".$user_id."'";
$response = array();
$response["success"] =$conn->query($sql);
echo json_encode($response);
