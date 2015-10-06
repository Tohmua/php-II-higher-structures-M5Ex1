<?php

namespace App\Products;

use App\ORM\ORM;
use App\CurrencyLocalizer\CurrencyLocalizer;

class Car implements Product
{
    private $productId;
    private $currencyLocalizer;

    public function __construct(ORM $repository, CurrencyLocalizer $currencyLocalizer, $productId = 0)
    {
        $this->repository = $repository;
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
        $product = $this->repository->get(
            'products', ['productId' => $this->productId]
        );

        return $product->price;
    }
}
