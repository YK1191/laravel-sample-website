<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestDateTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_date_times', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('request_id');            
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
        Schema::dropIfExists('request_date_times');
    }
}
