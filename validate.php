<?php

// mock database for this exercise
$dbusername = 'seficohen1';
$dbemail = 'seficohen1@gmail.com';
$dbpassword = '123456';
$dbpasswordEnc = password_hash($dbpassword, PASSWORD_DEFAULT); // PASSWRORD_DEFAULT is considerd best practice to use rather than BCRYPT

// checking if recieved input fields corespond with database

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


if($dbusername === $username AND $dbemail === $email AND password_verify($password, $dbpasswordEnc)) 
{
  session_start();
  $_SESSION['user'] = $username;
  $_SESSION['email'] = $email;
  header('Location: panel.php');

} else {
  // header("Location: index.php");
  header('Location:index.php?denied=1');
}

