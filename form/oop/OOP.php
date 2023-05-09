<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>OOP</title>
</head>
<body>
 <?php
 class BankAccount{
  public $accountNumber;
  public $balance;
  public function deposit($amount){
   if ($amount > 0){
    $this->balance += $amount;
   }
  }
 }
 $account->accountNumber = 1;
 echo $account
 
 ?>
</body>
</html>