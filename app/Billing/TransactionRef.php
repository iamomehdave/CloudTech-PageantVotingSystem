<?php

namespace App\Billing;

class TransactionRef{

    public  static function trans_ref(){
        return 'SCHR'.str_random(2).'-'.date('d-m-y-h-m-s');
    }
}
