<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehical_bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

            $table->string('tourist_name');
            $table->string('country');
            $table->string('email');
            $table->unsignedBigInteger('vehical_id');
            $table->foreign('vehical_id')->references('id')->on('vehicals')->onUpdate('cascade')->onDelete('cascade');
            // $table->unsignedBigInteger('agent_id');
            // $table->foreign('agent_id')->references('id')->on('users');

            $table->string('pickup');
            $table->string('dropoff');
            $table->text('pickuptime');
         
            $table->string('action')->default('pending');
            
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
        Schema::dropIfExists('vehical_bookings');
    }
};
