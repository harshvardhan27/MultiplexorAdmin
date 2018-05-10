<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('firstname');
            $table->String('lastname');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('pin');
            $table->integer('collateral_id')->unsigned()->nullable();
            $table->string('ethereum_address');
            $table->integer('credit_score')->nullable();
            $table->char('user_profile_verified','1')->default('N');
            $table->char('user_profile_locked','1')->default('N');
            $table->string('email');
            $table->binary('kyc_docs_img1')->nullable();
            $table->string('kyc_docs_img1_mime');
            $table->binary('kyc_docs_img2')->nullable();
            $table->string('kyc_docs_img2_mime');
            $table->foreign('email')->references('email')->on('login')->onDelete('cascade');
            $table->foreign('collateral_id')->references('collateral_id')->on('collateral')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
