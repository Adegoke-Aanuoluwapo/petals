<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Login Page</title>
 <link rel="stylesheet" href="style.css">
</head>

<body>
 <h4>Login Page</h4>
 <div>
  <form action="reg.html" method="GET">
   <div>
    <label for="name">First Name:</label><br>
    <input type="text" ; placeholder="FirstName" input class="fname"><br>
   </div>
   <div>
    <label for="Lastname">Last Name</label><br>
    <input type="text" ; placeholder="Last Name" ; input class="Lname"><br>
   </div>
   <div>
    <label for="Number">Phone Number</label><br>
    <input type="number" ; placeholder="Phone Number" input class="number"><br>
   </div>
   <div>
    <label for="mail">Email</label><br>
    <input type="text" ; placeholder="Email" input class="Email"><br>
   </div>
   <div>
    <label for="Date">Date of Birth</label>:<br>
    <input type="date" ; placeholder="date" input class="fname" f><br>
   </div>
   <div>
    <label for="color">Select your favorite color</label><br>
    <input type="color" ; placeholder="Color"><button class="color" ; value="rgb">color</button><br>
   </div>
   <div>
    <label for="Sex">Sex</label>:<br>
    <select name="sex" ; id="sex">
     <option value="male">MALE</option>
     <option value="female">FEMALE</option>
    </select><br>
   </div>

   <button>Submit</button>


  </form>
 </div>
</body>

</html>