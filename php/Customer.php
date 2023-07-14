<?php

class Customer{
 private ?PaymentProfile $paymentProfile = null;

 public function getpaymentProfile(): ?Customer
{
  return $this->paymentProfile;
}
}