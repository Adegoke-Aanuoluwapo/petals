 <?php

 require_once "BaseClass.php";
 require_once "SubClass.php";

 $baseObject = new BaseClass();
 print $baseObject->getprotectedProperty() . '<br>';
 print $baseObject->getParentProtectedPropert();
 