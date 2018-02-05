<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Account;
use App\Payment;
use App\Transaction;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function accounts()
    {
        return $this->hasMany('Account');
    }

    public function payments()
    {
        return $this->hasMany('Payment');
    }

    public function transactions()
    {
        return $this->hasManyThrough('Transaction', 'Account');
    }
}
