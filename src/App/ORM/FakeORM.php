<?php

namespace App\ORM;

class FakeORM implements ORM {
    private $products = [
        '0' => [
            'price' => 550
        ],
        '1' => [
            'price' => 1500
        ],
        '2' => [
            'price' => 10
        ],
        '3' => [
            'price' => 199
        ]
    ];

    public function get($table, array $fields) {
        if(!method_exists($this, $table)) {
            throw new \Exception('Fake ORM not set up for table ' . $table);
        }

        return $this->$table($fields);
    }

    private function products(array $fields) {
        if (!isset($fields['productId']) || !array_key_exists($fields['productId'], $this->products)) {
            throw new \Exception('Fake ORM product not found');
        }

        $products = new \stdClass();
        $products->price = $this->products[$fields['productId']]['price'];
        return $products;
    }
}