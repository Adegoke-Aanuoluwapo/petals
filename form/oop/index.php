<?php
//Classes & Objects

require_once 'OOP.php';

$transaction = new Transaction();
$transaction->amount = 45;

$transaction->discription ="I am Happy, Millioniare";
var_dump($transaction->discription);
var_dump($transaction->amount)
?>