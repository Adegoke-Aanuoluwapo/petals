<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <?php 
 // $str = "Aanuoluwapo";
 // echo strlen($str) . '<br>';
 // $message = 'こんにちは';
 // echo mb_strlen($message) . '<br>';
 // $s = "PHP is cool";
 // $result =substr($s, -7, -5);
 // echo $result

 $message = 'adiós';
 $result = mb_substr($message, 3, 1);
 echo $result;
 $str = 'PHP is cool';
 $position = stripos($str, 'php');
var_dump($position)
 ?>
</body>
</html>