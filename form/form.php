<?php
if ($_POST) {
 $base = $_POST['base'];
 $height = $_POST['height'];

 $area = 0.5 * $base * $height;
};
?>


<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <form method="POST">
  base:
  <input type="number" name="base"><br>
  height:
  <input type="number" name="height"><br>
  <input type="submit"><br>
  <input type="text" value="<?= $area ?>">
 </form>
</body>

</html>