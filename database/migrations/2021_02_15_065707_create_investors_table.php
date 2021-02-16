<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('userId');
            $table->string('lang')->nullable();
            $table->string('title_one')->nullable();
            $table->string('desc_one')->nullable();
            $table->string('amnt')->nullable();
            $table->string('title_two')->nullable();
            $table->string('desc_two')->nullable();
            $table->string('year')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('investors');
    }
}
