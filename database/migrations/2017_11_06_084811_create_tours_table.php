<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title');
            $table->string('location');
            $table->string('languages');
            $table->string('tour_size');
            $table->decimal('price_per_adult', 8, 2);
            $table->decimal('price_per_children', 8, 2);
            $table->date('dateFrom');
            $table->date('dateTo');
            $table->string('timeFrom');
            $table->string('timeTo');
            $table->string('available');
            $table->text('about_tour'); 
            $table->text('travel_experience');             
            $table->string('ages');
            $table->integer('review');
            $table->integer('stars');            
            $table->string('photo'); 
            $table->text('video');
            $table->text('interests');     
            $table->boolean('is_default');       
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
        Schema::dropIfExists('tours');
    }
}
