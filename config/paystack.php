<?php

return [

    /**
     * Public Key From Paystack Dashboard
     *
     */
    'publicKey' => getenv('pk_test_925832fb39a595d9cc8f2882792914dd9da0b467'),

    /**
     * Secret Key From Paystack Dashboard
     *
     */
    'secretKey' => getenv('sk_test_b17d97f2db7d702c8b877056c6c1a13ca4bd247b'),

    /**
     * Paystack Payment URL
     *
     */
    'paymentUrl' => getenv('PAYSTACK_PAYMENT_URL'),

    /**
     * Optional email address of the merchant
     *
     */
    'merchantEmail' => getenv('MERCHANT_EMAIL'),

];