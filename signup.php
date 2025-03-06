<?php

   session_start()

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
<?php
         if(isset($_SESSION['message'])){
            echo '<p class="message">'. $_SESSION['message'].'</p>';
            unset( $_SESSION['message']);
         }
          
        ?>
    <form action="signupapi.php"   method="POST">
        <h2>Climate Research registration</h2>
        <div  class="inputBox">
          <input type="text"  placeholder="firstname" name="firstname" required>
          <input type="text"  placeholder="lastname"  name="lastname" required>
          <input type="email"  placeholder="Email" name="email"  required>
          <input type="number"  min="0"  step="1" placeholder="phone number"  name="phonenumber"  required>
        </div>
        <div class="inputBox"> 
                <h3>Gender</h3>
            <div class="gender">
                <label for="">Male</label>
                <input type="radio"   value="Male"  name="gender"  required>
                <label for="">Female</label>
                <input type="radio"  name="gender"   value="Female" required>
            </div>
            <input type="number"  min="0"  name="age" placeholder="age" required>
            <select name="city" id="">
              <option  selected>Select City</option>
            <?php
            $cities = [
                "Baringo", "Bomet", "Bungoma", "Busia", "Elgeyo Marakwet", "Embu", "Garissa", "Homa Bay", "Isiolo", 
                "Kajiado", "Kakamega", "Kericho", "Kiambu", "Kilifi", "Kirinyaga", "Kisii", "Kisumu", "Kitui", "Kwale", 
                "Laikipia", "Lamu", "Machakos", "Makueni", "Mandera", "Marsabit", "Meru", "Migori", "Mombasa", "Murang'a", 
                "Nairobi", "Nakuru", "Nandi", "Narok", "Nyamira", "Nyandarua", "Nyeri", "Samburu", "Siaya", "Taita Taveta", 
                "Tana River", "Tharaka Nithi", "Trans Nzoia", "Turkana", "Uasin Gishu", "Vihiga", "Wajir", "West Pokot"
            ];
             foreach($cities as $city){
                echo  '<option>'.$city.'</option>';
             }
           
            
            ?>
         </select>
            <input type="password" name="password" placeholder="password">
            <input type="password"  name="confirm_password"  placeholder="confirm password">

            
             
        </div>
        <input type="submit" name="submit"  value="Register">
     
    </form>

<a href="login.php"  class="link">Login</a>
</body>
</html>