<!DOCTYPE html>
<html>
<body>

<?php
require_once("./private/dbaccess.php");

$userID = $_POST["userID"];
$instanceID= $_POST["instanceID"];
// 중복된 instanceID가 db내에 있으면, 삭제후 현 username 에 삽입
$sql = "UPDATE User SET device_id= NULL WHERE device_id='".$instanceID."'";
$conn->query($sql);
$sql = "UPDATE User SET device_id='".$instanceID."' WHERE username='".$userID."'";
$response = array();
$response["success"] =$conn->query($sql);
echo json_encode($response);

$conn->close();
?>
</body>
</html>