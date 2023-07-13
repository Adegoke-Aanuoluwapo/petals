<?php 
 include("trans.php");
$transaction = new Transaction(100, ' Transaction 1');
 $transaction->addTax(8);
 $transaction->applydiscount(10);
var_dump($transaction->amount);
session_abort()
?>