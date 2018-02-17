<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Lend extends Model
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
