<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollateralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collateral', function (Blueprint $table) {
            $table->increments('collateral_id');
            $table->string('collateral_type');
            $table->double('collateral_amount');
            $table->char('collateral_verified','1')->default('N');
            $table->char('collateral_staked','1')->default('N');
            $table->string('email');
            $table->foreign('email')->references('email')->on('login')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collaterals');
    }
}
