<?php
include 'conexion.php';
$error_duplicateEntry = 'Duplicate entry';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $email = $_POST['email'];
  if (empty($email)) {
    echo "Email is empty";
  } 
  else {
    try {
      $insertar = "INSERT INTO Email(Email) VALUES ('$email')";
      $query= mysqli_query($conn, $insertar);

      if($query == 1)
        header('Location: ../static/finishregister.html');
      else
      echo "$query";
    } catch (mysqli_sql_exception $e) {
      if(strpos($e, $error_duplicateEntry, 0)){
          header('Location: ../static/mailregistered.html');
      }        
      else{
        header('Location: ../static/error.html');
      }
    }
  }
}
?>