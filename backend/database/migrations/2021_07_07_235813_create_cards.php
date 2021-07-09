<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('cardID');
            $table->integer('textX');
            $table->integer('textY');
            $table->json('textJSON');
            $table->text('imageSrc');
            $table->longText('imageBase64');
            $table->integer('editorID');
            $table->datetime('addDate');
            $table->boolean('isLive');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
