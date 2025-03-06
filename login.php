<?php

   session_start()

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
      
<?php
         if(isset($_SESSION['message'])){
            echo '<p class="message">'. $_SESSION['message'].'</p>';
            unset( $_SESSION['message']);
         }
          
        ?>    
      
      
            
    <form action="loginapi.php" class="login"  method="POST" >
      <h2>Login</h2>
    <input type="email"  name="email"  placeholder="Email">
    <input type="password"  name="password"  placeholder="password">
    <input type="submit"  name="submit" value="Login">
    
    </form>
    <a href="signup.php" class="link">Sign Up</a>
</body>
</html>