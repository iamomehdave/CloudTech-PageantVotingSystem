<?php
namespace App\Billing;
use \Yabacon\Paystack;
use Yabacon\Paystack\Exception\ApiException;

class Payment{

    public function verifyResponse($transactionref)
    {
        $gateway = Config('sk_test_b17d97f2db7d702c8b877056c6c1a13ca4bd247b');
        $paystack = new Paystack($gateway);
        $responseObj = $paystack->transaction->verify(["reference"=>$transactionref]);
        $payment = (object)$responseObj;

        return $payment;
    }
   
}