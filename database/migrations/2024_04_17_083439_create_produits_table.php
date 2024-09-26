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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('codebarre');
            $table->string('designation');
            $table->double('prix_ht')->nullable();
            $table->double('prix_vente');
            $table->text('description');
            $table->boolean('featured_product')->default(0);
            $table->double('tva')->default(0.2);
            $table->string('image')->nullable();
            $table->foreignId('sous_famille_id')->constrained();
            $table->foreignId('marque_id')->constrained();
            $table->foreignId('unite_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
