<?php
include "db.php";
/* To take query from the URL */
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTP'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
/* pass the component */
$url_components = parse_url($url);
$data=$url_components['query'];
$new = str_replace('%22', '"', $data);
$new2 = str_replace('%20', ' ', $new);
/* JSON decode of the Query parameters */

$sqlliteparams = json_decode($new2,TRUE);

/* Validate and insert the data into database */

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
