<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Account extends Model
{
    //

    public function __construct()
    {
        $this->ACC_NO = str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT);

    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function transactions()
    {
        return $this->hasMany('App\Transaction');
    }

    public function payments()
    {
        return $this->hasMany('App\Payment');
    }

    public function loans()
    {
        return $this->hasMany('App\Loan');
    }

    public function lends()
    {
        return $this->hasMany('App\Lend');
    }

    public function currency(){
        return $this->belongsTo('App\Currency');
    }
}
