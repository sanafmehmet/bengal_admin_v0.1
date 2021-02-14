<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('userId');
            $table->string('lang');
            $table->string('tab');
            $table->string('title')->nullable();
            $table->string('sort_title')->nullable();
            $table->string('image')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('desc')->nullable();
            $table->string('sub_image')->nullable();
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
        Schema::dropIfExists('tabs');
    }
}
