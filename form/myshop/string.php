<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <?php 
 $str = "Aanuoluwapo";
 echo strlen($str) . '<br>';
 $message = 'こんにちは';
 echo mb_strlen($message) . '<br>';
 $s = "PHP substring";
 $result =substr($s, 0, 5);
 echo $result
 ?>
</body>
</html>