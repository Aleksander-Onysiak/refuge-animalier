<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('sex', ['Mâle', 'Femelle']);
            $table->string('type');
            $table->string('race')->nullable();
            $table->string('status')->default('Disponible');
            $table->string('color');
            $table->integer('age');
            $table->string('image');
            $table->timestamp('date_of_arrival');
            $table->timestamp('date_of_adoption')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
