<?php
if ($_POST) {
 $surname = $_POST['surname'];
 $firstname = $_POST['firstname'];
 $class = $_POST['class'];
 $dateOfBirth = $_POST['dateOfBirth'];
 $number = $_POST['number'];
 $address = $_POST['address'];
 $school = $_POST['school'];
 $state = $_POST['state'];
 $LGA = $_POST['LGA'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <form method="$_POST">
  Surname:
  <input type="text" value="surname"><br><br>
  Firstname:
  <input type="text" value="firstname"><br><br>
  Class:
  <input type="text" value="class"><br><br>
  Date of Birth:
  <input type="text" value="dateOfBirth"><br><br>
  Number:
  <input type="text" value="number"><br><br>
  Address:
  <input type="text" value="address"><br><br>
  School:
  <input type="text" value="school"><br><br>
  State:
  <input type="text" value="state"><br><br>
  LGA:
  <input type="text" value="LGA">
<input type="submit" name="submit">
 </form>
 <table>
  <thead>
   <tr>
    <th>FORM</th>
    <th>OUTPUT</th>
   </tr>
  </thead>
  <tbody>
   <tr>
    <td>Surname</td>
    <td><input type="text" value="<?=$surname ?>"></td>
   </tr>
   <tr>
    <td>First Name</td>
    <td><input type="text" value="<?=$firstname ?>"></td>
   </tr>
   <tr>
    <td>Class</td>
    <td><input type="text" value="<?=$class ?>"></td>
   </tr>
   <tr>
    <td>Date of Birth</td>
    <td><input type="text" value="<?=$dateOfBirth ?>"></td>
   </tr>
   <tr>
    <td>Number</td>
    <td><input type="text" value="<?=$number ?>"></td>
   </tr>
   <tr>
    <td>Address</td>
    <td><input type="text" value="<?=$address ?>"></td>
   </tr>
   <tr>
    <td>School</td>
    <td><input type="text" value="<?=$school ?>"></td>
   </tr>
   <tr>
    <td>State</td>
    <td><input type="text" value="<?=$state ?>"></td>
   </tr>
   <tr>
    <td>LGA</td>
    <td><input type="text" value="<?=$LGA ?>"></td>
   </tr>
  </tbody>
 </table>
</body>

</html>