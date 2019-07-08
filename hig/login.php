<!DOCTYPE html>
<html>
<body>

<?php
$servername = "127.0.0.1:3306";
$username = "root";
$password = "hig0722";
$dbname = "rocat";

$userID = $_POST["userID"];
$userPassword = $_POST["userPassword"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
mysqli_set_charset($conn,"utf8");
$sql = "SELECT * FROM User WHERE username= " . '"' .$userID. '" AND password="'. $userPassword .'"';

$arr = array('success'=>false);

//if($result = $conn->query($sql))
//{
	$result = $conn->query($sql);
	if($row = $result->fetch_assoc())
	{
	$arr = array(
		'userID' => $row["username"],
		'userPassword' => $row["password"],
		'success' =>true,
		);
	}
//}
 
echo json_encode($arr);

$conn->close();
?>
</body>
</html>