<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Transaction;
use App\Loan;
use App\Lend;
use App\Payment;
use App\Currency;

class Account extends Model
{
    //

    public function __construct()
    {
        $this->ACC_NO = str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT);

    }

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function transactions()
    {
        return $this->hasMany('Transaction');
    }

    public function payments()
    {
        return $this->hasMany('Payment');
    }

    public function loans()
    {
        return $this->hasManyThrough('Loan', 'Transaction');
    }

    public function lends()
    {
        return $this->hasManyThrough('Lend', 'Transaction');
    }

    public function currency(){
        return $this->hasOne('Currency');
    }
}
