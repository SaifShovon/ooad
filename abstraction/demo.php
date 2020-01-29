<?php
require_once "discount.php";
require_once "product.php";
require_once "fixedDiscount.php";
require_once "percentageDiscount.php";

$product = new Product();
$product->price = 5000;
$product->discount = new FixedDiscount(300);

echo $product->getPriceAfterDiscount() . "\n";

$product->discount = new FixedDiscount(7300);

echo $product->getPriceAfterDiscount(). "\n";

$product->discount = new PercentageDiscount(10);

echo $product->getPriceAfterDiscount(). "\n";
