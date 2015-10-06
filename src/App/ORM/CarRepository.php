<?php

namespace App\ORM;

class CarRepository implements Repository {
    private $price;

    public function __construct(array $values)
    {
        if (!isset($values['price'])) {
            throw new \Exception('Car repository requires price');
        }

        $this->price = $values['price'];
    }

    public function price()
    {
        return $this->price;
    }
}