<?php

/**
 * Payments implementation using Strategy Pattern
 *
 */
interface Payments
{
    public function doPayment($product);
}

class CCPayment implements Payments
{
    public function doPayment($product)
    {
        var_dump("buy {$product} by CC payment method");
    }
}

class DDPayment implements Payments
{

    public function doPayment($product)
    {
        var_dump("buy {$product} by DD payment method");
    }
}

class PayPalPayment implements Payments
{

    public function doPayment($product)
    {
        var_dump("buy {$product} by PayPal payment method");
    }
}

class Shop
{
    public function buyNow($product, Payments $payment)
    {
        $payment->doPayment($product);
    }
}

$myShop = new Shop();
$myShop->buyNow('apple', new PayPalPayment());