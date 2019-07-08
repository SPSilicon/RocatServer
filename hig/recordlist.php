<!DOCTYPE html>
<html>
<body>

<?php
require("./private/dbaccess.php");

$rocat = $_POST["rocatid"];

$sql = "SELECT * FROM Record WHERE Rocat_Rocat_id = ".$rocat;
$result = $conn->query($sql);
?>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
			$arr[] = array(
			'id' => $row["Record_id"],
			'gps_la' => $row["gps_latitude"],
			'gps_lo' =>$row["gps_longitude"],
			'date' =>$row["time"]);
    }
} else {
    echo "0 results";
}
echo json_encode($arr,JSON_PRETTY_PRINT);
$conn->close();
?>
</body>
</html>