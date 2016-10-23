<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('service_name');
            $table->integer('stock');
            $table->double('price');
            $table->string('image_service_url');
            $table->string('description_short');
            $table->string('description');
            $table->bigInteger('servicestype_id')->unsigned();
            $table->bigInteger('supplier_id')->unsigned();
            $table->foreign('servicestype_id')->references('id')->on('servicestypes');
            $table->foreign('supplier_id')->references('id')->on('suppliers');
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
        Schema::drop('services');
    }
}
