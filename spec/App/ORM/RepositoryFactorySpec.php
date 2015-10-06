<?php

namespace spec\App\ORM;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RepositoryFactorySpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('App\ORM\RepositoryFactory');
    }

    public function it_should_return_an_instance_of_CarRepository()
    {
        $this::get('car', ['price' => '10'])->shouldHaveType('\App\ORM\CarRepository');
    }
}
