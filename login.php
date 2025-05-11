<?php
session_start();

include 'connect.php';

//Login form
if (isset($_POST['singnIn'])) {

   $email = $_POST['email'];
   $password = $_POST['password'];
   //$password = md5($password);

   $sql = "SELECT * FROM register WHERE email = '$email' and password = '$password'";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {

      $row = $result->fetch_assoc();
      $_SESSION['email'] = $row['email'];
      header("Location: homepage.php");
      exit();
   } else {
      header("Location: login.php?error=1");
      exit();
   }
}

if (isset($_GET['error']) && $_GET['error'] == 1) {
   echo "<p style='color:red;'>User Not found, Incorrect Email or Password, Please try again</p>";
}
