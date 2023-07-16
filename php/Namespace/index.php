<?php

//include("PaymentGateway/Stripe/Transaction.php");
//include("PaymentGateway/Paddle/Transaction.php");
require_once './PaymentGateway/Stripe/Transaction.php';
require_once './PaymentGateway/Paddle/CustomerProfile.php';
require_once './PaymentGateway/Stripe/Transaction.php';

use PaymentGateway\Paddle\Transaction;
var_dump(new Transaction());