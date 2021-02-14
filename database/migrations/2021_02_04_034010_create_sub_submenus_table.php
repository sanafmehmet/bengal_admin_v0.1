<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubSubmenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_submenus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('submenu_id');
            $table->integer('userId');
            $table->string('lang')->nullable();
            $table->string('sub_submenu')->nullable();
            $table->integer('isSub_submenu')->default(0);
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
        Schema::dropIfExists('sub_submenus');
    }
}
