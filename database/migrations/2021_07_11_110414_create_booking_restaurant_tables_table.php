<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingRestaurantTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_restaurant_tables', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('booking_restaurant_id')->unsigned();
            $table->string('table_name');
            $table->string('table_max_dinners');
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
        Schema::dropIfExists('booking_restaurant_tables');
    }
}
