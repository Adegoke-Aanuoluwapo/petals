<?php

var_dump(checkdate(12,31,-400));
echo "<br>";
var_dump(checkdate(2,29,2003));
echo "<br>";
var_dump(checkdate(2,29,2004));
echo '<br>';
echo date('A'). '<br>';
echo '<br>';
echo date('a'). '<br>';
$date=date_create(2013-03-15);
date_add($date,date_interval_create_from_date_string("40 days"));
echo date_format($date,"Y-m-d");