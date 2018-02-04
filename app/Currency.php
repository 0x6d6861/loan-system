<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Account;

class Currency extends Model
{
    //

    public function accounts()
    {
        return $this->hasMany('Account');
    }
}

