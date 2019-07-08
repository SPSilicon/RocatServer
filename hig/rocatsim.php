<?php
require("./private/dbaccess.php");

$sql = "SELECT Rocat_id FROM Rocat";
$result = $conn->query($sql);
if(extension_loaded("curl")) { echo "cURL extension is loaded"; } else { echo "cURL extension is not abailable"; }
?>


    <form method="post" action="sendnotification.php">
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
            <input type="submit">
    </form>
