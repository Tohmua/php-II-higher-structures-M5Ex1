<?php

namespace App\Products;

use App\ORM\ORM;
use App\CurrencyLocalizer\CurrencyLocalizer;

class Product implements ProductInterface
{
    private $productId;
    private $currencyLocalizer;

    public function __construct(ORM $orm, CurrencyLocalizer $currencyLocalizer, $productId = 0)
    {
        $this->orm = $orm;
        $this->currencyLocalizer = $currencyLocalizer;
        $this->setProductId($productId);
    }

    public function setProductId($productId)
    {
        $this->productId = (int) $productId;

        return $this;
    }

    public function price()
    {
        return $this->currencyLocalizer->formattedPrice($this->getPrice());
    }

    private function getPrice()
    {
        $product = $this->orm->get(
            'products', ['productId' => $this->productId]
        );

        return $product->price;
    }
}
