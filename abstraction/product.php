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
        return $this->price - $this->discount->getDiscountAmount($this->price);
    }
}

