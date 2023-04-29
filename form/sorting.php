<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
<?php 
$numbers = [2, 1, 3];

sort($numbers);
print_r($numbers);

$names = ['Bob', 'John', 'Alice'];
sort($names, SORT_STRING);
print_r($names);

$fruits = ['apple', 'Banana', 'orange'];
sort($fruits, SORT_FLAG_CASE);

print_r($fruits);
$rank = ['A-1', 'A-2', 'A-12', 'A-11'];
rsort($ranks, SORT_STRING | SORT_NATURAL);
print_r($ranks);



?>
 
</body>
</html>