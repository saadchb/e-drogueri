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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->longText('comments')->nullable();
            $table->float('rating')->default(0.5);      
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('siteweb')->nullable();
            $table->foreignId('user_id')->constrained()->on('users')->onDelete('cascade');                   
            $table->foreignId('produit_id')->constrained()->on('produits')->onDelete('cascade');       
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
