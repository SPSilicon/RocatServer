<?php
require("./private/dbaccess.php");
//밥그릇의 밥의양, gps정보, 날짜를 받아서 db에 저장합니다.
header('Content-Type: application/json');
$rocatID = $_POST["ID"];
$rocatFood = $_POST["Food"];
$rocatGPS_la =  $_POST["GPS_la"];
$rocatGPS_lo = $_POST["GPS_lo"];
$rocatTime = $_POST["Time"]; // 'Y-m-d H:i:s' 형식의 시간


$result = array();
$result["success"] = false;
$sql = "INSERT INTO Record (time, gps_latitude, gps_longitude, Rocat_Rocat_id) VALUES ('".$rocatTime."','".$rocatGPS_la."','".$rocatGPS_lo."','".$rocatID."')";
$conn->query($sql);
if($conn->affected_rows>0)
{
    $sql = "UPDATE Rocat SET gps_latitude = '".$rocatGPS_la."', gps_longitude = '".$rocatGPS_lo."', food_amount = '".$rocatFood."' WHERE Rocat.Rocat_id = '".$rocatID."'";
    $conn->query($sql);
    if($conn->affected_rows>0) {
        $result["success"] = true;
    }
}





