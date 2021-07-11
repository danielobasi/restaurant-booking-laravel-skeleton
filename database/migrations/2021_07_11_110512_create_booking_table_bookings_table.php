<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTableBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_table_bookings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('booking_booking_id')->unsigned();
            $table->bigInteger('booking_restaurant_table_id')->unsigned();
            $table->tinyInteger('quantity');
            $table->string('guests');
            $table->timestamps();

            $table->foreign('booking_booking_id')->references('id')->on('booking_bookings')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('booking_restaurant_table_id')->references('id')->on('booking_restaurant_tables')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_table_bookings');
    }
}
