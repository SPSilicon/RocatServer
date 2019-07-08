<?php


function send_notification($tokens, $title ,$message)
{
    $url = 'https://fcm.googleapis.com/fcm/send';

    $message = array(
        'title'     => $title,
        'body'      => $message,
    );
    $fields = array(
        'registration_ids' => $tokens,
        'data' => $message
    );
    $key = "AAAATLgdU-I:APA91bHrFnXIHNXQCYQTjsVLj3xB9TA98XoS-S7C2L5RVl7Swppe7TvzRAWcr0oRn_WsB3wZjkRW8UwMuM7zSrDZ_P8IamcC5-jl94-HLxYiP5doHbFMWnSw4hJx_FGjcKKsyZOM25KW
";
    $headers = array(
        'Authorization:key =' . $key,
        'Content-Type: application/json',
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
    curl_close($ch);
    return $result;
}
?>
