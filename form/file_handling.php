<?php

// $filename = 'user.txt';

// // if (file_exists($file)) {
// //  echo file_get_contents($file);
// // $handle = fopen($file, 'r');
// // $contents = fread($handle, filesize($file));
// // fclose($handle);
// // echo $contents;
// //};
// // echo "Welcome home";

// // if (file_exists($filename)){
// // echo "$filename was las accessed: ".date("F d Y H:i:s.",fileatime($filename));
// // }
// // $f = fopen($filename, 'r');
// // if ($f) {
// //  echo 'The file ' . $filename
// //   . 'is open';
// //  fclose($f);
// // }
// if(file_exists($filename)){
//  echo '<pre>';
//  echo file_get_contents($filename);
//  echo '</pre>';
// };
// echo '<br>';

// // $file2 ="../JavaScript/using.txt";
// // if(file_exists($file2)){
// //  echo file_get_contents($file2);
// //}
// if (file_exists($filename)){
//  $message ="The file $filename exist";

// }else{
//  $message = "THe file $filename does not exist";
// }
// echo $message;
// if(is_file($filename)){
//  $message2 ="The file $filename exist";

// }else{
//  $message2 = "The file $filename does not exist";
// }
// echo $message2
// ?>
// <h1><?php
// $pop = "./public/population.txt";
// if(file_exists($pop)){
//  echo file_get_contents($pop);
// };
//  $f = fopen($pop, 'r');
// if ($f){
// $contents = fread($f, filesize($pop));
// fclose(($f));
// echo nl2br($contents);
// };

// $lines = [];
// if (!$f){
//  return;
// } while(!feof($f)){
//  $lines[] = fgets($f);
// }

// print_r($lines);
// fclose($f);

?></h1>
<h1>Test</h1>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <?php
$f = tmpfile();
if (false !== $f){
 fputs($f, 'The current times is ' . strftime('%c'));
}
echo 'The current time is '.strftime('%c');
exit(1);
 ?>

</body>

</html>