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
        Schema::create('retroalimentaciones', function (Blueprint $table) {
            $table->id();
            $table->string('retroalimentacion');
             //hacesmos la relacion con la tabla_retroalimentacion
            $table->foreignId('id_juegos')->constrained('juego')
            ->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retroalimentaciones');
    }
};
