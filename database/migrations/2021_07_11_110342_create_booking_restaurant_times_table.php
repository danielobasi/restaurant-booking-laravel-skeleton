<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingRestaurantTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_restaurant_times', function (Blueprint $table) {
            $table->id();
            $table->dateTime('opening_time');
            $table->dateTime('closing_time');
            $table->string('opening_days');
            $table->string('special_days');
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
        Schema::dropIfExists('booking_restaurant_times');
    }
}
