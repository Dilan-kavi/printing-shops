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
        Schema::create('customers_pcenters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customers_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreignId('pcenters_id')->references('id')->on('pcenters')->onDelete('cascade');
            $table->timestamps();
            $table->softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers_pcenters');
    }
};
