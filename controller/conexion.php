<?php

$servername = "ls-fae1bbf661b7e25b19c0863f769a95f531dff3a9.c8rvuejjz7es.us-east-2.rds.amazonaws.com";
$username = "dbmaster";
$password = "passnewsletter57";

// Create connection
try{
  $conn = new mysqli($servername, $username, $password,'newsletter');
}catch(mysqli_sql_exception $e){
  header('Location: ../static/error.html');
}
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  header('Location: ../static/error.html');
}
//echo "Connected successfully";
?>