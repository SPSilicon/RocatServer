<!DOCTYPE html>
<html>
<body>

<?php
require("./private/dbaccess.php");
$userID = $_POST["userID"];
$rocatID= $_POST["rocatID"];
$subs = $_POST["subscript"];

if($subs=="1")
    $sql = "INSERT INTO subscript (User_id, Rocat_id) VALUES((SELECT User_id FROM User WHERE username='".$userID."'), '".$rocatID."')";
else if($subs=="0")
    $sql = "DELETE FROM subscript WHERE User_id IN( SELECT User_id FROM User WHERE username='".$userID."') AND Rocat_id =" .$rocatID;

$response = array();
$response["success"] =$conn->query($sql);
echo json_encode($response);

$conn->close();
?>
</body>
</html>