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
        Schema::create('retroalimentaciones', function (Blueprint $table) {
            $table->id();
            $table->string('retroalimentacion');
            $table->timestamps();

             //hacesmos la relacion con la tabla_retroalimentacion
            $table->foreignId('id_juegos')->constrained('juegos')
            ->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('retroalimentaciones');
    }
};
