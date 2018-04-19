<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourDateTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_date_times', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tours_id');            
            $table->date('dateFrom');
            $table->date('dateTo');
            $table->string('timeFrom');
            $table->string('timeTo');                
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
        Schema::dropIfExists('tour_date_times');
    }
}
