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
        Schema::create('plonges', function (Blueprint $table) {
            $table->id();
            $table->string('lieu');
            $table->integer('duree');
            $table->decimal('prix');
            $table->integer('nb_places');
            $table->text('description');
            $table->string('image');
            $table->string('statut');
            $table->decimal('profondeur');
            $table->integer('temps');
            $table->integer('pallier');
            $table->foreignId('moniteur_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plonges');
    }
};
