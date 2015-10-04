<?php

namespace spec\App\ORM;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FakeORMSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('App\ORM\FakeORM');
    }

    public function it_returns_550_for_product_0()
    {
        $product = new \stdClass();
        $product->price = 550;

        $this->get('products', ['productId' => 0])->shouldBeLike($product);
    }

    public function it_returns_1500_for_product_1()
    {
        $product = new \stdClass();
        $product->price = 1500;

        $this->get('products', ['productId' => 1])->shouldBeLike($product);
    }

    public function it_returns_10_for_product_2()
    {
        $product = new \stdClass();
        $product->price = 10;

        $this->get('products', ['productId' => 2])->shouldBeLike($product);
    }

    public function it_returns_199_for_product_3()
    {
        $product = new \stdClass();
        $product->price = 199;

        $this->get('products', ['productId' => 3])->shouldBeLike($product);
    }

    public function it_throws_exception_when_invalid_table_provided()
    {
        $this->shouldThrow('\Exception')->during('get', ['foo', ['productId' => 0]]);
    }

    public function it_throws_exception_when_no_product_id_given()
    {
        $this->shouldThrow('\Exception')->during('get', ['products', ['foo' => 0]]);
    }
}
