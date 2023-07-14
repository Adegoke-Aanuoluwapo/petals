<?php 
include("trans.php");
include("Customer.php");
include("PaymentProfile.php");

$transaction = new Transaction(5, 'Test');



 echo $transaction->getCustomer()?->getpaymentProfile()?->id; 
     
echo $profileId;
?>