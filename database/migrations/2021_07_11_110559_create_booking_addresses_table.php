<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_addresses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('booking_restaurant_id')->unsigned();
            $table->string('web');
            $table->string('street_address');
            $table->string('house_number');
            $table->string('house_name');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('post_code');
            $table->string('forwarding_address');
            $table->string('description');
            $table->tinyInteger('is_residential_address');
            $table->tinyInteger('is_work_address');
            $table->tinyInteger('is_proxy_address');
            $table->tinyInteger('is_primary_address');
            $table->string('alt_emails');
            $table->string('alt_phone_numbers');
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
        Schema::dropIfExists('booking_addresses');
    }
}
