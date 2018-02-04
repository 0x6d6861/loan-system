<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Transaction;

class Loan extends Model
{
    //

    public function transaction()
    {
        return $this->belongsTo('Transaction');
    }
}
