<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('userId');
            $table->string('lang');
            $table->string('heading')->nullable();;
            $table->string('title')->nullable();
            $table->string('desc')->nullable();
            $table->string('case_study')->nullable();
            $table->string('product_1')->nullable();
            $table->string('product_2')->nullable();
            $table->string('product_3')->nullable();
            $table->string('product_4')->nullable();
            $table->string('product_5')->nullable();
            $table->string('product_6')->nullable();
            $table->string('product_7')->nullable();
            $table->string('product_8')->nullable();
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
        Schema::dropIfExists('services');
    }
}
