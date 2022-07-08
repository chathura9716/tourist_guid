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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tourist_id');
            $table->string('tourist_name');
            $table->string('country');
            $table->string('email');
            $table->string('hotel');
            $table->string('checkin');
            $table->string('checkout');
            $table->string('comfort');
            $table->string('adults');
            $table->string('childrens');
            $table->string('rooms');
            $table->text('message')->nullable();
            $table->string('price')->nullable();
            
            $table->timestamps();

            $table->foreign('tourist_id')->references('id')->on('tourists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
