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

    private function car(array $fields) {
        if (!isset($fields['productId']) || !array_key_exists($fields['productId'], $this->products)) {
            throw new \Exception('Fake ORM car id not found');
        }

        return RepositoryFactory::get(
            'car',
            ['price' => $this->products[$fields['productId']]['price']]
        );
    }
}