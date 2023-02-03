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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('vehicle_id')->references('id')->on('vehicles');

            $table->string('phone_number')->unique();
            $table->string('password');

            $table->string('access_token')->nullable();

            $table->string('email')->nullable()->unique();
            $table->string('cpf',11)->nullable()->unique();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->enum('gender',['male','female'])->nullable();
            $table->date('birth_date')->nullable();
            $table->string('license')->nullable();
            $table->date('dt_license_expired')->nullable();
            $table->jsonb('payment_style')->nullable();
           

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
        Schema::dropIfExists('drivers');
    }
};
