<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guides', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->decimal('priceForVirtualGuide', 8, 2);
            $table->decimal('priceForTourGuide', 8, 2);
            $table->string('yourmotto');
            $table->string('locations');	
            $table->date('dateFrom');	
            $table->date('dateTo');	
            $table->text('experience');   
            $table->boolean('isQualifiedDriver');  
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
        Schema::dropIfExists('guides');
    }
}
