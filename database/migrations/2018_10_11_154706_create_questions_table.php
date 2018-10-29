<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblquestion', function (Blueprint $table) {
            $table->increments('question_id');
            $table->longText('question_name');
            $table->longText('question_content')->nullable();
            $table->integer('question_user_id')->unsigned();
            $table->foreign('question_user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->integer('question_consultant_expert_id')->unsigned()->nullable();
            $table->foreign('question_consultant_expert_id')->references('consultant_expert_id')->on('tblconsultant_expert')->onDelete('cascade');
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
        Schema::dropIfExists('tblquestion');
    }
}
