<?php
namespace App\ORM;

interface ORM {
    public function get($tableObject, array $fields);
}