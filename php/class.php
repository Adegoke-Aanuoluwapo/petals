<?php

declare(strict_types=1);
class BankAccount{
 public float $balance;
 public $accountNumber;

 public function __construct(float $balance)
{
 $this->balance = $balance;
}
}



$account = new BankAccount();
$account->accountNumber = 1;
$account->balance = 100;
echo ($account->accountNumber)

?>