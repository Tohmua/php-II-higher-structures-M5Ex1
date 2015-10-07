<?php

namespace App\ORM;

interface Repository
{
    public function persist();

    public function destroy();
}