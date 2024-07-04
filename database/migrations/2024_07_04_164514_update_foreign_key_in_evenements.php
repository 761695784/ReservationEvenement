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
        Schema::table('evenements', function (Blueprint $table) {
            // Supprimer l'ancienne contrainte de clé étrangère si elle existe
            $table->dropForeign(['association_id']);

            // Ajouter la nouvelle contrainte de clé étrangère
            $table->foreignId('association_id')->constrained()->nullable(false);// Définit le comportement de suppression (optionnel)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('evenements', function (Blueprint $table) {
            // Supprimer la nouvelle contrainte de clé étrangère
            $table->dropForeign(['association_id']);

            // Rétablir l'ancienne contrainte de clé étrangère si nécessaire
            $table->foreign('association_id')
                  ->references('id')
                  ->on('associations')
                  ->onDelete('cascade');
        });
    }
};
