<!DOCTYPE html>
<html>
<body>

<?php
require("./private/dbaccess.php");

$sql = "SELECT Rocat_id FROM Rocat";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc())
	{
			$arr[] = array(
			'id' => $row["Rocat_id"]);
    }
} 
else 
{
    echo "0 results";
}
echo json_encode($arr,JSON_PRETTY_PRINT);
$conn->close();
?>
</body>
</html>