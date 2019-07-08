<!DOCTYPE html>
<html>
<body>

<?php
require("./private/dbaccess.php");

$userID = $_POST["userID"];
$rocatID= $_POST["rocatID"];


$sql = "SELECT User_id, Rocat_id FROM subscript WHERE User_id=(SELECT User_id FROM User WHERE username='".$userID."')AND Rocat_id='".$rocatID."'";

$result = $conn->query($sql);
$response = array();

    if($result->num_rows >0)
        $response["on"] =true;
    else
        $response["on"] = false;
echo json_encode($response);
//echo $sql;

$conn->close();
?>
</body>
</html>