<?php
session_start();

if(isset($_POST['submit'])){
    require_once('dbhconn.php');

    $email = trim( $_POST['email']);
    $password = trim( $_POST['password']);
    $query = "SELECT  firstname, password FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if($result && mysqli_num_rows($result) > 0){

    $row = mysqli_fetch_assoc($result);

    if(password_verify($password,$row['password'])){
      
        $_SESSION['firstname']  = $row['firstname'];
        header("Location: dashboard.php");
        die();

    }else{

        $_SESSION['message'] ="Invalid user credentials";
    
        header("Location: login.php");
        die();
    }
}else{

    $_SESSION['message'] ="User does no exist";

    header("Location: login.php");
    die();
}

}