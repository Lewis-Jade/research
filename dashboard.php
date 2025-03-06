<?php

   session_start()

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Climate Research registration</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

*{
   margin: 0;
   padding: 0;
   font-family: "Poppins", sans-serif;


}
     body{
        background: hsl(240, 5%, 96%);
     }
     header{
        background: hsl(240, 5%, 96%);
        width: 100%;
        height:50px;
        box-shadow: 2px 2px 5px #00000015,
        -2px -2px 5px  #00000015;
     }
     .links{
        height:50px;
        width: 300px;
        display:flex;
        justify-content:space-around;
        align-items:center;
        position: absolute;
        right: 50px;
     }
     a{
        text-decoration:none;
        color: #4522f4;
        trasition:0.5s ease-in-out;
     }
     button{
        width: 80px;
        height:40px;
        border:none;
        outline:none;
        color:#fff;
        border-radius:8px;
        background: #4522f4;
        trasition:0.5s ease-in-out;
        font-size:16px;
     }
     button:hover{
    background: #3f1de8;
    font-weight: 500;
    transform: scale(1.2);
}
a:hover{
    border-bottom:2px solid rgb(160, 60, 197);
    font-weight:500;
}
p{
    position:absolute;
    left:10px;
    top:10px;
    color:rgb(55, 21, 227);
    font-weight:500;
    font-size:18px;
}
strong{
   color:red;
}

img{
   width:100%;
   height:40%;
}
.info{
   position: absolute;
   z-index: 2;
   top:200px;
   font-size:26px;
   font-weight:600;
   color:white;
   background:rgba(15, 15, 16, 0.44);
}
</style>
<body>
    <header>
    <?php
   if(isset(  $_SESSION['firstname'] )){
      echo '<p> <strong>Welcome </strong>  '.  $_SESSION['firstname'] .'</p>';


      
   }
  
  ?>
       <div class="links">
       <a href="#">Home</a>
          <a href="#">About</a>
          <a href="#">Contact</a>
          <form action="logout.php"  method="POST">
            <button name="submit">Logout</button>
          </form>
       </div>
    </header>
    <div class="info">

    </div>
    <img src="climate.webp" alt="climate">
    <p  class="info">Welcome to our climate research hub! Explore, innovate, and discover solutions for a sustainable future. Together, we make a difference!</p>
</body>
</html>