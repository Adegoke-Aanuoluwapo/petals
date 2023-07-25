<?php
require_once "SubClass.php";
class BaseClass  extends SubClass
{
   public function getParentProtectedPropert():string
   {
       return $this->protectedProperty;
   }
}