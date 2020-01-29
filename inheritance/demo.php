<?php
require_once "person.php";

$person1 = new Person("jalaluddin", "test123", "Jalal Uddin");
$person2 = new Person("hasan", "demo123", "Ahmed Hasan");

echo $person1->matchPassword("demo123") . "\n";
echo $person1->matchPassword("test123") . "\n";
echo $person2->matchPassword("demo123") . "\n";