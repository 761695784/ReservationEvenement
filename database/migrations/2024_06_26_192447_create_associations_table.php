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
        Schema::create('associations', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->string('logo')->nullable();
            $table->string('adresse');
            $table->string('secteur_activite');
            $table->string('ninea')->unique();
            $table->date('date_creation');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            // Définir la clé étrangère
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('associations');
    }
};
