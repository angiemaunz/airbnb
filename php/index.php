<?php



require 'test.php';
require 'member.php';

$angie = new Test();
$jeff = new Member();

$angie->email = 'angie@example.com';
$angie->password = 'supersonicsammie';
$angie->memberID = 01;
$angie->birthday = 2000-01-12;
$angie->firstName = 'Angie';
$angie->lastName = 'Monzo';
$angie->loginName = 'no_angel';

$jeff->email = 'jeff@example.com';
$jeff->password = 'jslkfjoiwuepfsjfs';
$angie->memberID = 02;


var_dump($angie);
var_dump($jeff);