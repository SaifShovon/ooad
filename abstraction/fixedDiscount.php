<?php
require_once "discount.php";

class FixedDiscount extends Discount
{
    public function getDiscountAmount($originalPrice)
    {
        if($originalPrice >= $this->amount)
            return $this->amount;
        else
            return $originalPrice;
    }
}