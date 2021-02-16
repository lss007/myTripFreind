<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserVerifiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_verifies', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('emailcode');
            $table->string('phonecode')->nullable();
            $table->enum('email_verified', ['0', '1'])->default(false);
            $table->enum('phone_verified', ['0', '1'])->default(false);
            $table->enum('active', ['0', '1'])->default(false);
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
        Schema::dropIfExists('user_verifies');
    }
}
