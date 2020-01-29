<?php
include "product.php";

$p = new Product();
$p->name = "Laptop";
$p->price = 5000;
$p->discount = 10;
echo $p->getPriceAfterDiscount();