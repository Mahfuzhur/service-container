<?php

namespace App\Billing;

use App\Billing\PaymentGatewayContract;
use Illuminate\Support\Str;

class CardPaymentGateway implements PaymentGatewayContract{
    private $currency;
    private $discount = 0;
    private $fees = 0;
    public function __construct($currency,$fees){
        $this->currency = $currency;
        $this->fess = $fees;
    }
    public function setDiscount($amount){
        $this->discount = $amount;
    }
    public function charge($amount){
        // Charge the bank

        return [
            'amount' => $amount - $this->discount,
            'confirmation_number' => Str::random(),
            "currency" => $this->currency,
            "discount" => $this->discount,
            "fees" => $amount * $this->fess,
        ];
    }
}