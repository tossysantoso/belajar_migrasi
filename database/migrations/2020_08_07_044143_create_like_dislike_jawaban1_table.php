<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeDislikeJawaban1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_dislike_jawaban1', function (Blueprint $table) {

            $table->unsignedBigInteger('jawaban_id');
            $table->unsignedBigInteger('profil_id');
            $table->integer('point');
            $table->timestamps();

            $table->primary(['jawaban_id', 'profil_id']);

            $table->foreign('jawaban_id')->references('id')->on('jawaban');

            $table->foreign('profil_id')->references('id')->on('profil');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like_dislike_jawaban1');
    }
}
