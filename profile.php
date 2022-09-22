<?php
// include database connection file here using include.
include "db.php";
// get current URL along with parameters
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTP'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// get the components of URL
$url_components = parse_url($url);
// find the URL component of the URL component query
$data=$url_components['query'];
// replace the spaces with of the URL to find the correct data of an array of json.
$new = str_replace('%22', '"', $data);
// replace the spaces with of the URL to find the correct data of an array of json.
$new2 = str_replace('%20', ' ', $new);

// decode json data in an array
$sqlliteparams = json_decode($new2,TRUE);

// if the json data is not empty then fetch the data.
if(!empty($sqlliteparams))
{
foreach($sqlliteparams as $values)
{
global $conn;
//Insert profile data into database.
	$sql = "INSERT INTO userreg (name,mail,section,mobile) VALUES ('".$values['name']."', '".$values['email']."', '".$values['sector']."', '".$values['contact']."')";
         if ($conn->query($sql) === TRUE) {
            echo "<br>data added successfully";
         } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
         }
}
}
?>

