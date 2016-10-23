<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('company_name')->nullable();
            $table->string('representative_name')->nullable();
            $table->string('phone');
            $table->string('cell_phone');
            $table->bigInteger('address_id')->unsigned();
            $table->string('email');
            $table->string('website');
            $table->string('facebook');
            $table->string('twitter');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('address_id')->references('id')->on('addresses');
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
        Schema::drop('suppliers');
    }
}
