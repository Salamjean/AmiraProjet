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
        Schema::create('validations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('reference');
            $table->string('prenom');
            $table->string('note');
            $table->string('sanction');
            $table->string('typeV');
            $table->string('categorie');
            $table->string('contact');
            $table->string('matricule');
            $table->string('fonction');
            $table->date('dateNaiss');
            $table->date('dateEmbauche');
            $table->string('ancien');
            $table->string('etat');
            $table->string('direction');
            $table->string('immatriculation');
            $table->string('marque');
            $table->date('dateServ');
            $table->integer('montant');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validations');
    }
};
