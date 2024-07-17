<?php

//OCP（Open Closed Principle）

//支払方法のインターフェース
interface PaymentMethod
{
    public function pay($amount);
}

class CreditCardPayment implements PaymentMethod
{
    public function pay($amount)
    {
        echo htmlspecialchars("クレジットカード${amount}円払いました。\n");

    }
}

class PayPalPayment implements PaymentMethod
{
    public function pay($amount)
    {
        echo htmlspecialchars("PayPalで${amount}円払いました。\n");
    }
}

$creditCard = new CreditCardPayment();
$creditCard->pay(1000);

$payPal = new PayPalPayment();
$processor->processPayment($payPal, 2000);
