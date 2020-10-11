<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('country_id')->on('countries');
            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id')->references('state_id')->on('states');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('city_id')->on('cities');
            $table->string('birthday_date')->nullable();
            $table->string('address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('card_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
