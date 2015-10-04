<?php

namespace App\CurrencyLocalizer;

class GBPCurrencyLocalizer implements CurrencyLocalizer
{
    public function formattedPrice($price)
    {
        return '£' . number_format($price / 100, 2, '.', ',');
    }
}