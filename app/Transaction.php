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
}
