<?php
  session_start();

if(isset($_POST['submit'])){
  require_once('dbhconn.php');
   $firstname =trim($_POST['firstname']);
  $lastname = trim($_POST['lastname']);
  $email = trim($_POST['email']);
  $phonenumber =trim($_POST['phonenumber']);
  $gender =trim($_POST['phonenumber']);
  $age = trim($_POST['age']);
  $city = trim($_POST['city']);
  $password =trim($_POST['password']);
  $confirm_password = trim($_POST['confirm_password']);
 

  if($password !== $confirm_password){

    $_SESSION['message'] = "passwords do not match";
    header("Location: signup.php");
    die();

  }

  $hash = password_hash($password,PASSWORD_DEFAULT);

$query = "INSERT INTO users(firstname,lastname,email,phonenumber,gender,age,city,password) VALUES('$firstname','$lastname','$email','$phonenumber','$gender','$age','$city','$hash')";

$result = $conn->query($query);


if($result){
    $_SESSION['message'] = "Registered successfully.";
    header("Location: signup.php");
    die();

}

 
}


