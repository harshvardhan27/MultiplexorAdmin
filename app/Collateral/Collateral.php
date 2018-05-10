<?php

namespace App\Collateral;

use Illuminate\Database\Eloquent\Model;

class Collateral extends Model
{
    protected $table = 'collateral';
    public $timestamps = false;
    protected $primaryKey = 'collateral_id';

    protected $fillable = ['collateral_type','collateral_amount','collateral_verified','collateral_staked', 'email'];

    public function login()
    {
        return $this->belongsTo( 'App\Account\Account' );
    }

    public function user_details()
    {
        return $this->hasMany('App\Kyc\UserDetail');
    }
}
