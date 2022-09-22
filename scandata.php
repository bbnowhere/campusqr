<?php
include "db.php";

$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTP'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//$url = 'http://172.16.110.86/login/scandata.php?[{"email":"test@gmail.com","date_time":"2022-08-30 8:28:57","scanned_value":1010,"device_id":"1010","id":1}]';
// Prior to 5.4.7 this would show the path as "//www.example.com/path"
$url_components = parse_url($url);
$data=$url_components['query'];
$new = str_replace('%22', '"', $data);
$new2 = str_replace('%20', ' ', $new);

$sqlliteparams = json_decode($new2,TRUE);

if(!empty($sqlliteparams))
{
foreach($sqlliteparams as $values)
{
    $timestamp = strtotime($values['date_time']);
    $new_date = date('Y-m-d H:i:s', $timestamp);
global $conn;
    //Insert query
         $sql = "INSERT INTO scandata (device,mail,qrid,date) VALUES ('".$values['device_id']."', '".$values['email']."', '".$values['scanned_value']."', '".$new_date."')";
         if ($conn->query($sql) === TRUE) {
            echo "<br>data added successfully";
         } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
         }
}
}
?> 
