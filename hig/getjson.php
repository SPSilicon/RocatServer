<!DOCTYPE html>
<html>
<body>


<?php
require("./private/dbaccess.php");

?>
<script>
	window.alert("Connected successfully");
</script>
<?php
$sql = "SELECT Rocat_id FROM Rocat";
$result = $conn->query($sql);
?>

<form method="post" action="go.php">
rocat_id
<select name ="rocatid">
	
<?php
if ($result->num_rows > 0) 
	{
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
		echo "<option  value='".$row['Rocat_id']."'>".$row['Rocat_id']."</option>";
    }
	echo "</select>";
} else {
    echo "0 results";
}
$conn->close();

?>
<input type="submit" align="center">
</form>

</body>
</html>