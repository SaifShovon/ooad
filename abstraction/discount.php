<?php
abstract class Discount
{
    public $amount;

    public abstract function getDiscountAmount($originalPrice);

    public function __construct($amount)
    {
        $this->amount = $amount;
    }
}