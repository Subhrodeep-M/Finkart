<?php

include 'connect.php';

if (isset($_POST['signUp'])) {
   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   //$password = md5($password);

   $checkEmail = "SELECT * FROM register where email = '$email'"; //users is a table in db 
   $result = $conn->query($checkEmail);
   if ($result->num_rows > 0) {
      echo "Email Address already exists!";
   } else {
      $insertQuery = "INSERT INTO register(name,number,email,password) VALUES ('$name','$number','$email','$password')";

      if ($conn->query($insertQuery) == TRUE) {
         header("location: login2.php");
      } else {
         echo "Error:" . $conn->error;
      }
   }
}

//Login form
if (isset($_POST['signin-button'])) {
   $email = $_POST['email'];
   $password = $_POST['password'];
   //$password = md5($password);

   $sql = "SELECT * FROM register WHERE email = '$email' and password = '$password'";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
      session_start();
      $row = $result->fetch_assoc();
      $_SESSION['email'] = $row['email'];
      header("Location: Dashboard.html");
      exit();
   } else {
      echo "Not found, Incorrect Email or Password";
   }
}
