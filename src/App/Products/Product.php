<?php
namespace App\Products;

interface Product {
    public function price();
    public function setProductId($productId);
}