<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Transaction;
use App\Account;


class Loan extends Model
{
    //

    public function transaction()
    {
        return $this->belongsTo('App\Transaction');
    }
    
     public function account(){
        return $this->belongsTo('App\Account');
    }
    
    public function status(){
        return $this->belongsTo('App\Status');
    }
}
