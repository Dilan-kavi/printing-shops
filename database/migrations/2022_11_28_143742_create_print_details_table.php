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
        Schema::create('print_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orders_id')->references('id')->on('orders')->onDelete('cascade');
            $table->string('color');
            $table->string('orientation');
            $table->string('page_size');
            $table->string('pp_sheet');
            $table->string('filename');
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
        Schema::dropIfExists('print_details');
    }
};
