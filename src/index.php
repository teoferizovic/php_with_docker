<?php

$host = 'mysql_cont';  
$user = 'testuser';
$password = 'testpass';
$db = 'test_db';

$conn = new mysqli($host,$user,$password,$db);
 if($conn->connect_error){
  echo 'connection failed'. $conn->connect_error;
  return;
}
echo 'successfully connected to db';
