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
        Schema::create('inscriptions', function (Blueprint $table) {
        $table->id();
        $table->foreignId('id_participant')->constrained('participants')->onDelete('cascade');
        $table->foreignId('id_formation')->constrained('formations')->onDelete('cascade');
        $table->timestamp('date_inscription')->useCurrent();
        $table->enum('statut', ['En attente', 'Validée', 'Rejetée'])->default('En attente');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
