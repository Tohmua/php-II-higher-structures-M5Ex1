<?php
namespace App\Products;

interface ProductInterface {
    public function price();
    public function setProductId($productId);
}