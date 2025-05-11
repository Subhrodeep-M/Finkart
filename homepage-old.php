<?php
session_start();
include 'connect.php';


if (isset($_SESSION['email'])) {

    $email = $_SESSION['email'];
    $sql = "SELECT * FROM register WHERE email = '$email'";
    $result = $conn->query($sql);



    // while ($row = mysqli_fetch_array($query)) {
    //     echo $row['fname'] . ' ' . $row['lname'];
    // }

    $row = mysqli_fetch_array($result);

    $fname = $row['name'];
    $email = $row['email'];
    $number = $row['number'];

    echo "Welcome $fname" . " " . "$email" . " " . "$number";
}
