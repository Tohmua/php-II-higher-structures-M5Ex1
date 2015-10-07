<?php

namespace spec\App\Products;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use App\ORM\FakeORM;
use App\CurrencyLocalizer\GBPCurrencyLocalizer;

class CarSpec extends ObjectBehavior
{
    public function let()
    {
        $fakeORM = new FakeORM();
        $currencyLocalizer = new GBPCurrencyLocalizer();
        $this->beConstructedWith($fakeORM, $currencyLocalizer);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('App\Products\Car');
    }

    public function it_returns_price_550_for_product_0()
    {
        $this->setProductId(0);
        $this->price()->shouldReturn('£5.50');
    }

    public function it_returns_price_1500_for_product_1()
    {
        $this->setProductId(1);
        $this->price()->shouldReturn('£15.00');
    }

    public function it_returns_price_010_for_product_2()
    {
        $this->setProductId(2);
        $this->price()->shouldReturn('£0.10');
    }

    public function it_returns_price_199_for_product_3()
    {
        $this->setProductId(3);
        $this->price()->shouldReturn('£1.99');
    }
}
