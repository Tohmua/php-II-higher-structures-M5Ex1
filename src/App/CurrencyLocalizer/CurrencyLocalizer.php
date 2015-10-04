<?php

namespace App\CurrencyLocalizer;

interface CurrencyLocalizer
{
    public function formattedPrice($price);
}