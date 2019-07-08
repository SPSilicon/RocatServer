<!DOCTYPE html>
<html>
<body>

<?php
echo "My first PHP script!";
?>
<?php
$servername = "127.0.0.1:3306";
$username = "root";
$password = "hig0722";
$dbname = "rocat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully <br>";

$sql = "SELECT Rocat_id FROM Rocat";
$result = $conn->query($sql);
?>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["Rocat_id"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>