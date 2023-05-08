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

//  $message = 'adiós';
//  $result = mb_substr($message, 3, 1);
//  echo $result;
//  $str = 'PHP is cool';
//  $position = stripos($str, 'php');
// var_dump($position)
// $str = 'Hello there';
// $new_str = str_replace('Hello', 'Hi', $str);
// echo $new_str . '<br>';
// echo $str;
// $str2 = 'Hi, hi, hi';
// $new_str2 = str_replace('hi', 'bye', $str2, $count);
// echo $new_str2;
// echo $count;
// $str = 'The quick brown fox jumps over the lazy dog';
// $animals = ['fox', 'dog'];
// $new_animals = ['wolf', 'cat'];
// $new_str =str_replace($animals, $new_animals, $str);
// echo $new_str
$column = ['first_name', 'last_name', 'email'];
$header = implode(',', $column);
echo $header
?>
</body>
</html>