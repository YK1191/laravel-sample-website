<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('email');
            $table->string('password');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('location');
            $table->date('dob');
            $table->string('phonenumber');
            $table->text('languages');
            $table->text('aboutme');
            $table->string('picture');            
            $table->string('paypal_email'); 
            $table->boolean('notification_text');
            $table->boolean('notification_email');
            $table->string('google_account');
            $table->string('facebook_account');
            $table->string('linkedin_account');
            $table->string('instagram_account');
            $table->rememberToken();            
            $table->timestamps();

            $table->unique('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
