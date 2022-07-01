<?php
use App\Cart;
class CartTest extends \PHPUnit\Framework\TestCase
{
    public function testCorrectNetPriceIsReturned(){

        $cart = new Cart();
        $cart->price = 10;
        $netPrice = $cart->getNetPrice();

        $this->assertEquals(12,$netPrice);
    }
//    using test annotation
    /** @test */

    public function the_cart_value_can_be_changed_statically(){
        Cart::$tax = 1.5;

        $cart = new Cart();
        $cart->price = 10;
        $netPrice = $cart->getNetPrice();

        $this->assertEquals(15,$netPrice);

    }

}