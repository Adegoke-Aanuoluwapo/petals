<?php

$filename = 'user.txt';

// if (file_exists($file)) {
//  echo file_get_contents($file);
 // $handle = fopen($file, 'r');
 // $contents = fread($handle, filesize($file));
 // fclose($handle);
 // echo $contents;
//};
echo "Welcome home";

if (file_exists($filename)){
echo "$filename was las accessed: ".date("F d Y H:i:s.",fileatime($filename));
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
 <?php

 ?>

</body>

</html>