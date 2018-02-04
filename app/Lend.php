<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Transaction;

class Lend extends Model
{
    //

    public function transaction()
    {
        return $this->belongsTo('Transaction');
    }
}
