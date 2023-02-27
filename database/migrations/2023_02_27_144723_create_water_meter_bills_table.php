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
        Schema::create('water_meter_bills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('water_meter_id');
            $table->dateTime('periode');
            $table->string('total_meter');
            $table->string('meter_before');
            $table->string('meter_after');
            $table->string('price_permeter_cubic');
            $table->string('total_amount');
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
        Schema::dropIfExists('water_meter_bills');
    }
};
