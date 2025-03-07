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
        Schema::table('users', function (Blueprint $table) {
            // $table->string('lastName', 100);
            // $table->date('date_naissance');
            // $table->string('photo_profil');
            // $table->string('numero');
            // $table->foreignId('entreprise_id')->constrained()->onDelete('cascade');
            // $table->foreignId('departement_id')->nullable()->constrained()->onDelete('set null');
            // $table->string('statut')->default('actif');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            
        });
    }
};
