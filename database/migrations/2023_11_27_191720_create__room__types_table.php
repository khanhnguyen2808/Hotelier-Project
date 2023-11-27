<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Room_Types', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text('image')->nullable();
            $table->unsignedBigInteger("hotel_id");
            $table->unsignedBigInteger("city_id");
            $table->foreign('hotel_id')->references('id')->on('Hotels');
            $table->foreign('city_id')->references('id')->on('Cities');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Room_Types');
    }
};
