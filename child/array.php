<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Array Manipulations</title>
</head>

<body>
 a globally accepted data format in all programming languages
 <?php

 $arr = [2, 4, 7, 8, 9, 3, 1, 44, 67, 90, 65, 4, 2, 66, 82, 79, 12];
 $arr2 = ['banana', 'mango', 'cherry', 'orange', 'apple', 'plantain', 'tangerin', 'borocolli'];
 $count = count($arr);
 echo $count;
 $merge = array_merge($arr, $arr2);

 foreach ($arr as $ar) {
  echo $ar;
  echo '<br>';
 }
 $i = 0;
 while ($i < $count) {
  $e = $i++;
  echo $arr[$e] . '<br>';
 }

 function pickItem($x)
 {
 }
 function isPrime($num)
 {
  if ($num <= 1) {
   return false;
  }
  for ($i = 2; $i <= sqrt($num); $i++) {
   if ($num % $i == 0) {
    return false;
   }
  }
  return true;
 }

 function findPrimes($start, $end)
 {
  $primes = array();
  for ($i = $start; $i <= $end; $i++) {
   if (isPrime($i)) {
    $primes[] = $i;
   }
  }
  return $primes;
 }
 $primeNumbers = findPrimes(1, 100);
 echo "Prime numbers between 1 and 100 are: " . implode(", ", $primeNumbers);
 echo '<br>';
 $date = date('m');
 $year = date('d, M Y');
 echo $year;
 echo $date; 
 ?>
 

</body>

</html>