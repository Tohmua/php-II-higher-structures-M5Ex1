<?php

namespace App\ORM;

class CarRepository extends Model implements Repository
{
    private $price;

    public function __construct(array $values)
    {
        if (!isset($values['price'])) {
            throw new \Exception('Car repository requires price');
        }

        $this->price = $values['price'];
    }

    final public function persist()
    {
        // Do Nothing this is a test we don't have a DB connection
    }

    final public function destroy()
    {
        // Do Nothing this is a test we don't have a DB connection
    }

    public function price()
    {
        return $this->price;
    }
}