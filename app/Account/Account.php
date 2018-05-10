<?php

namespace App\Account;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'login';
    public $incrementing = false;
    public $timestamps = false;
    protected $primaryKey = 'email';

    protected $fillable = ['email', 'password'];

    public function collaterals()
    {
        return $this->hasMany('App\Collateral\Collateral');
    }

    public function user_details()
    {
        return $this->hasMany('App\Kyc\UserDetail');
    }
}
