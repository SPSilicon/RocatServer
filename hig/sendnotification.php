<?php
function send_notification($devices ,$title,$rocatid ,$message)
{
    //https://firebase.google.com/docs/cloud-messaging/http-server-ref
    $url = 'https://fcm.googleapis.com/fcm/send';

    $message = array(
        'title'     => $title,
        'body'      => $message,
        'rocatId' => $rocatid
    );
    $fields = array(
        'registration_ids' => $devices,
        'data' => $message
    );
    $key = "AIzaSyAE83xJLRCqf6ocAK1DU5NwsW-e0IAIcAo";
    $headers = array(
        'Authorization:key =' . $key,
        'Content-Type: application/json'
    );

    $ch = curl_init();
    curl_setopt( $ch,CURLOPT_URL,$url);
    curl_setopt( $ch,CURLOPT_POST,true);
    curl_setopt( $ch,CURLOPT_HTTPHEADER,$headers);
    curl_setopt( $ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt( $ch,CURLOPT_POSTFIELDS,json_encode($fields));
    $result = curl_exec($ch);
    if ($result === FALSE) {
        die('Curl failed: ' . curl_error($ch));
    }
    //print_r(curl_getinfo($ch));
    curl_close($ch);

    return $result;
}

include("./private/dbaccess.php");
$rocatid = $_POST["rocatid"];


$sql = "SELECT DISTINCT device_id FROM vt_subsdevice WHERE Rocat_id = '".$rocatid."'";

$result = $conn->query($sql);
$devices = array();

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        $devices[] = $row["device_id"];
    }
    $myMessage = send_notification($devices,"고양이 발견!",$rocatid ,$rocatid."번 밥통에서 고양이가 밥을먹고있어요~");
    echo $myMessage;
}
else
{
    echo "구독하고 있는 기기가 없습니다.";
}

?>