<?php

namespace App\ORM;

abstract class Model
{
    abstract public function persist();

    abstract public function destroy();
}