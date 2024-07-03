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
            $table->unsignedBigInteger('association_id')->nullable();

            // Si vous voulez ajouter une contrainte de clé étrangère
            $table->foreign('association_id')->references('id')->on('associations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('evenements', function (Blueprint $table) {
            $table->dropForeign(['association_id']); // Pour supprimer la contrainte de clé étrangère
            $table->dropColumn('association_id');
        });
    }
};
