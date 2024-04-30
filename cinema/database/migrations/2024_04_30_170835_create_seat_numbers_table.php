<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Hall;
use App\Models\Type;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seat_numbers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Hall::class)->constrained()->onDelete('cascade');
            $table->unsignedTinyInteger('row');
            $table->unsignedTinyInteger('seat');
            $table->foreignIdFor(Type::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seat_numbers');
    }
};
