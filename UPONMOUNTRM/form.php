<?php
session_start();
include("connection.php");
include("function.php");


?>

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel="stylesheet" href="form.css">
</head>

<body>
 <div class="container">
  <div class="header">Registration</div>
  <form method="POST">
   <div class="details">
    <div class="box">
     <span class="details">First Name</span>
     <input type="text" placeholder="Enter Your First Name" name="firstname">

    </div>
    <div class="box">
     <span class="details">Last Name</span>
     <input type="text" placeholder="Enter Your Last Name" name="lastname">
    </div>


    <div class="box">
     <span class="details">Phone Number</span>
     <input type="phone" placeholder="Enter Your Phone Number" name="phone">
    </div>
    <div class="box">
     <span class="details">Email</span>
     <input type="email" placeholder="Enter Your mail" name="email">
    </div>

    <div class="box">
     <span class="details">Date of Birth</span>
     <input type="date" placeholder="Enter Your DOB" name="dateofb">
    </div>
    <div class="box">
     <span class="details">Favorite Color</span>
     <input type="color" placeholder="Enter Your Favorite Color" name="color">
    </div>
   </div>
   <div class="gender">
    <span class="gender-title">Gender</span>
    <div class="category">
     <input type="radio" name="gender"> Male
     <input type="radio" name="gender"> Female
     <input type="radio" name="gender"> Other
    </div>
    <div class="button">
     <button name="adduser">Register</button>
    </div>
   </div>

  </form>

 </div>
</body>

</html>