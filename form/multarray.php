<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <h1><?php
     $tasks = [
      ['Learning PHP programming', 2],
      ['Practice PHP', 2],
      ['Work', 8],
      ['Do excercise', 1]
     ];
     print_r($tasks) . '<br>';
     foreach($tasks as $task){
       foreach($task as $details){
        echo $details;
       }
       echo '<br>';
     };
     echo $tasks[0][0];

     usort($tasks, function($a, $b){
      return $a[1] <=> $b[1];
     })

     ?></h1>
</body>

</html>