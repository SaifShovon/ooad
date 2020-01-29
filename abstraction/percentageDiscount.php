<?php
require_once "discount.php";

class PercentageDiscount extends Discount
{
    public function getDiscountAmount($originalPrice)
    {
        return $originalPrice * $this->amount / 100.0;
    }
}