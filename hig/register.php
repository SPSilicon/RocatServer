<!DOCTYPE html>
<html>
<body>

<?php
require("./private/dbaccess.php");

$userID = $_POST["userID"];
$userPassword = $_POST["userPassword"];


$sql = "INSERT INTO User (username, password) VALUES( " . '"' .$userID. '","'. $userPassword .'" )';
$response = array();
$response["success"] =$conn->query($sql);
echo json_encode($response);

$conn->close();
?>
</body>
</html>