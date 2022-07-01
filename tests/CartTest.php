<?php

class CartTest extends \PHPUnit\Framework\TestCase
{
    public function testCorrectNetPriceIsReturned(){
        require 'Cart.php';
        $cart = new Cart();
        $cart->price = 10;
        $netPrice = $cart->getNetPrice();

        $this->assertEquals(12,$netPrice);
    }

}