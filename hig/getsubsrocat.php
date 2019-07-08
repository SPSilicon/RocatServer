<!DOCTYPE html>
<html>
<body>

<?php
require("./private/dbaccess.php");

$userID = $_POST["userID"];
$rocatID= $_POST["rocatID"];
$subs = $_POST["subscript"];

$sql = "SELECT User_id, Rocat_id FROM subscript WHERE User_id=(SELECT User_id FROM User WHERE username='".$userID."'), Rocat_id='".$rocatID."')";


$response = array();
$response["on"] =$conn->query($sql);
echo json_encode($response);

$conn->close();
?>
</body>
</html>