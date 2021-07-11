<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->dateTimeTz('last_login')->nullable();
            $table->tinyInteger('is_superuser')->default(0);
            $table->string('username')->nullable()->unique();
            $table->string('gender')->nullable();
            $table->string('title')->nullable();
            $table->string('name');
            $table->text('autobiography')->nullable();
            $table->tinyInteger('is_staff')->default(0);
            $table->tinyInteger('is_active')->default(1);
            $table->dateTimeTz('date_joined')->nullable();
            $table->dateTime('date_of_birth')->nullable();
            $table->string('pin')->nullable();
            $table->string('token')->nullable()->index();
            $table->string('uuid')->nullable()->index();
            $table->string('slug')->nullable()->unique();
            $table->string('email')->unique();
            $table->string('public_identity')->nullable();
            $table->string('work_id')->nullable();
            $table->string('mobile')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
