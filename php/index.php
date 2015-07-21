<?php



require 'test.php';
require 'member.php';

$angie = new Test();
*$jeff = new Member();

$angie->email = 'angie@example.com';

$angie->memberId = 01;
$angie->birthday = 2000-01-12;
$angie->firstName = 'Angie';
$angie->lastName = 'Monzo';
$angie->loginName = 'no_angel';

$jeff->email = 'jeff@example.com';

$angie->memberId = 02;


var_dump($angie);
var_dump($jeff->login());
var_dump($angie->logout());*/

$angie->setPassword('jjou');
$jeff->setPassword('jjou');