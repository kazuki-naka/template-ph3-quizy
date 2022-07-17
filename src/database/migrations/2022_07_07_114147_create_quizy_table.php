<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizy', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->timestamps();
        });

        Schema::create('big_questions', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
        });

        Schema::create('questions', function(Blueprint $table){
            $table->increments('id');
            $table->integer('big_question_id');
            $table->string('image');
        });

        Schema::create('choices', function(Blueprint $table){
            $table->increments('id');
            $table->integer('question_id');
            $table->string('name');
            $table->integer('valid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quizy');
        Schema::dropIfExists('big_question');
        Schema::dropIfExists('questions');
        Schema::dropIfExists('choices');
    }
}
