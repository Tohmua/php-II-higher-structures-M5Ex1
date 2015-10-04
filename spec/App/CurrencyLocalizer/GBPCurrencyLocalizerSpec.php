<?php

namespace spec\App\CurrencyLocalizer;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GBPCurrencyLocalizerSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('App\CurrencyLocalizer\GBPCurrencyLocalizer');
    }

    public function it_returns_correct_format_for_010()
    {
        $this->formattedPrice('010')->shouldReturn('£0.10');
    }

    public function it_returns_correct_format_for_001()
    {
        $this->formattedPrice('001')->shouldReturn('£0.01');
    }

    public function it_returns_correct_format_for_100()
    {
        $this->formattedPrice('100')->shouldReturn('£1.00');
    }

    public function it_returns_correct_format_for_10000()
    {
        $this->formattedPrice('10000')->shouldReturn('£100.00');
    }

    public function it_returns_correct_format_for_1000000()
    {
        $this->formattedPrice('1000000')->shouldReturn('£10,000.00');
    }

    public function it_returns_correct_format_for_9999999()
    {
        $this->formattedPrice('9999999')->shouldReturn('£99,999.99');
    }
}
