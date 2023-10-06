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
        Schema::create('troisiemesections', function (Blueprint $table) {
            $table->id();
            $table->text('titre');
            $table->text('description');
            $table->text('titrelment1');
            $table->text('titrelment2');
            $table->text('titrelment3');      
            $table->string('langue');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('troisiemesections');
    }
};
