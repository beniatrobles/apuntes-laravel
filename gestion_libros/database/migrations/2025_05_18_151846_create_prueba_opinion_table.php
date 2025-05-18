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
        Schema::create('prueba_opinion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('opinion_id');
            $table->unsignedBigInteger('prueba_id');


            //para que no se repitan
            // $table->unique(['opinion_id', 'prueba_id']);

            $table->foreign('opinion_id')->references('id')->on('opinions')->onDelete('cascade');
            $table->foreign('prueba_id')->references('id')->on('pruebas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prueba_opinion');
    }
};
