<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('location');
            $table->string('languages');
            $table->string('tour_size');
            $table->decimal('price', 8, 2);
            $table->date('dateFrom');
            $table->date('dateTo');
            $table->string('timeFrom');
            $table->string('timeTo');
            $table->text('about'); 
            $table->text('expectations');             
            $table->string('photo'); 
            $table->string('video');
            $table->string('embeded_video');
            $table->string('activities');
            $table->integer('review');
            $table->integer('stars');            
             
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
        Schema::dropIfExists('requests');
    }
}
