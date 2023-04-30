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

 // sort($numbers);
 usort($numbers, function($x, $y){
  if($x==$y){
   return 0;
  }
  return $x <$y ? -1 : 1;
 });
 print_r($numbers);
$number = [2, 1, 4, 3];

usort($number, function($x, $y){
 return $x <=> $y;
});
print_r($number);
$bill = [5, 1, 4, 2, 3];
usort($bill, fn($x, $y)=> $x <=>$y);
print_r($bill);

 $names = ['Alex', 'Peter', 'Alice', 'John'];
 usort($names, fn($x,$y)=>strlen($x)<=>$y);
 sort($names, SORT_STRING);
 print_r($names);

 $fruits = ['apple', 'Banana', 'orange'];
 sort($fruits, SORT_FLAG_CASE);

 // print_r($fruits);
 // $rank = ['A-1', 'A-2', 'A-12', 'A-11'];
 // rsort($ranks, SORT_STRING | SORT_NATURAL);
 // print_r($ranks);
 $employees = [
  'John' => [
   'age' => 24,
   'title' => 'Front-end Developer'
  ],
  'alice' => [
   'age' => 28,
   'title' => 'Web Designer'
  ],
  'bob' => [
   'age' => 25,
   'title' => 'MySQL DBA'
  ]
 ];
 ksort($employees, SORT_STRING);
 print_r($employees)


 ?>

</body>

</html>