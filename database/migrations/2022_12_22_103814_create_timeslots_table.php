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
        Schema::create('timeslots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pcenters_id')->constrained('pcenters')->uniqid();
            $table->foreignId('orders_id')->constrained('orders')->uniqid();
            $table->foreignId('customers_id')->constrained('customers')->uniqid();
            $table->time(stime);
            $table->time(etime);
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
        Schema::dropIfExists('timeslots');
    }
};
