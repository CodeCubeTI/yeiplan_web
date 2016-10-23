<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('package_name');
            $table->double('price');
            $table->string('image_package_url');
            $table->string('description_short', 120);
            $table->string('description', 500);
            $table->bigInteger('packagestype_id')->unsigned();
            $table->foreign('packagestype_id')->references('id')->on('packagestypes');
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
        Schema::drop('packages');
    }
}
