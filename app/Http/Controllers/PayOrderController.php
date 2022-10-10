<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billing\PaymentGatewayContract;
use App\Order\OrderDetails;
use App\Billing\BankPaymentGateway;

class PayOrderController extends Controller
{
    public function store(OrderDetails $orderDetails ,PaymentGatewayContract $paymentGateway){
        $orderDetails->all();
        dd($paymentGateway->charge(2500));
    }
}
