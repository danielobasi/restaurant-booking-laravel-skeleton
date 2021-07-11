<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingRestaurantOutletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_restaurant_outlets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('booking_restaurant_id')->unsigned();
            $table->string('outlet_name');
            $table->text('description');
            $table->timestamps();

            $table->foreign('booking_restaurant_id')->references('id')->on('booking_restaurants')
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
        Schema::dropIfExists('booking_restaurant_outlets');
    }
}
