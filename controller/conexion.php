<?php

$servername = "ls-fae1bbf661b7e25b19c0863f769a95f531dff3a9.c8rvuejjz7es.us-east-2.rds.amazonaws.com";
$username = "dbmaster";
$password = "passnewsletter57";

// Create connection
$conn = new mysqli($servername, $username, $password,'newsletter');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>