<?php

namespace spec\App\ORM;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CarRepositorySpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith(['price' => '10']);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('App\ORM\CarRepository');
    }

    public function it_should_have_price_of_10()
    {
        $this->price()->shouldReturn('10');
    }
}
