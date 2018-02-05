<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Account;
use App\Lend;
use App\Loan;
use App\Payment;

class Transaction extends Model
{
    //
    public function __construct()
    {
        $this->TRANSACTION_NO = $this->generateID();
    }

    public function account()
    {
        return $this->belongsTo('Account');
    }

    public  function lends(){
        return $this->hasMany('Lend');
    }

    public  function loans(){
        return $this->hasMany('Loan');
    }

    public function payments(){
        return $this->hasMany('Payment');
    }

    private function generateID($length = 10) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
