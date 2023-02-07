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
        Schema::create('online_drivers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->references('id')->on('drivers');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->timestamp('last_update')->nullable();
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
        Schema::dropIfExists('online_drivers');
    }
};
