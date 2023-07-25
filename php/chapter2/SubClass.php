<?php

class SubClass
{
   public $publicProperty = 'Values that could be accessed from anywhere in the code';
}

$sub = new SubClass;

var_dump($sub);