<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutusDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutus_documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('userId');
            $table->string('lang')->nullable();
            $table->string('ym')->nullable();
            $table->string('month')->nullable();
            $table->string('year')->nullable();
            $table->string('title')->nullable();
            $table->string('desc')->nullable();
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
        Schema::dropIfExists('aboutus_documents');
    }
}
