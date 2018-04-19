<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosAndVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos_and_videos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->boolean('isPhoto');
            $table->string('mediaFilePath');
            $table->boolean('isConfirmed');
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
        Schema::dropIfExists('photos_and_videos');
    }
}
