<?php

namespace App\Kyc;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'user_details';
    public $timestamps = false;
    protected $primaryKey = 'user_id';

    protected $fillable = ['firstname','lastname','address','city', 'state','pin','collateral_id','ethereum_address','credit_score','user_profile_verified','user_profile_locked','email','kyc_docs_img1','kyc_docs_img1_mime','kyc_docs_img2','kyc_docs_img2_mime'];

    public function login()
    {
        return $this->belongsTo( 'App\Account\Account' );
    }

    public function collateral()
    {
        return $this->belongsTo( 'App\Collateral\Collateral' );
    }
}
