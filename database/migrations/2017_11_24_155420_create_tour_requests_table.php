<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('tours_id');
            $table->integer('guide_id');
            $table_>boolean('isTourGuide');
            $table_>boolean('isVirtualGuide');
            $table->date('date');
            $table->string('time');
            $table->decimal('price', 8, 2);
            $table->string('itteration');
            $table->integer('guests_adults');
            $table->integer('guests_children');
            $table->integer('guests_infants');
            $table->text('additional');
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
        Schema::dropIfExists('tour_requests');
    }
}
