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
        Schema::dropIfExists('forecasts');
        Schema::create('forecasts', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignUuid('location_id');
            $table->date('date');
            $table->float('temperature');
            $table->string('description');
            $table->float('wind_speed');
            $table->float('wind_degree');
            $table->enum('wind_direction', ['N', 'NE', 'E', 'SE', 'S', 'SW', 'W', 'NW']);
            $table->float('humidity');
            $table->float('cloudcover');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forecasts');
    }
};
