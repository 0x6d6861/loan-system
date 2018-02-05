<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Transaction;
use App\User;

class Payment extends Model
{
    //

    public function transaction()
    {
        return $this->belongsTo('Transaction');
    }
    public function user(){
        return $this->belongsTo('User');
    }
}
