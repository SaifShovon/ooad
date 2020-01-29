<?php
class Product
{
    public $name;
    public $barcode;
    public $imageUrl;
    public $description;
    public $price;
    public $discount;

    public function getPriceAfterDiscount()
    {
        return $this->price - $this->getDiscountAmount();
    }

    public function getDiscountAmount()
    {
        return $this->price * $this->discount / 100.0;
    }
}

