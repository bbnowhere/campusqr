<?php
include "db.php";
$url = 'https://www.geeksforgeeks.org/register?name=Amit&email=amit1998@gmail.com&contact=8553154502&lab=IT';
     
$url_components = parse_url($url);
//$sqlite_params = json_decode($url_components, TRUE); 

parse_str($url_components['query'], $params);

global $conn;
       //print "<br>INSERT INTO userreg (name,mail,section,mobile) VALUES (".$param['name'].", ".$param['email'].", ".$param['lab'].", ".$param['contact'].")";

    //Insert query
$sql = "INSERT INTO userreg (name,mail,section,mobile) VALUES ('".$params['name']."', '".$params['email']."', '".$params['lab']."', '".$params['contact']."')";
         if ($conn->query($sql) === TRUE) {
            echo "<br>New student created successfully";
         } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        } 
?>
