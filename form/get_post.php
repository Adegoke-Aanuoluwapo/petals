<?php
if (isset($_POST['submit'])) {
 echo $_POST['name'];
 echo $_POST['age'];
 echo $_POST['sex'];
}

?>
<a href="<?php echo $_SERVER['PHP_SELF']; ?>? name=Albert&age=30">Click</a>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div>
   <label for="name">Name: </label>
   <input type="text" name="name">
  </div>
  <br>
  <div>
   <label for="age">Age: </label>
   <input type="text" name="age">
  </div>
  <br>
  <div>
   <label for="sex">Sex: </label>
   <input type="text" name="sex">
  </div>
  <input type="submit" value="Submit" name="submit">
 </form>
</body>

</html>