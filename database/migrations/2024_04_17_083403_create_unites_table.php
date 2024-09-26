<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('unites', function (Blueprint $table) {
            $table->id();
            $table->string('unite');
            $table->timestamps();
        });
        #insert data 
        $units = [
            'Piece',
            'Dozen',
            'Gram',
            'Kilogram',
            'Liter',
            'Milliliter',
            'Meter',
            'Centimeter',
            'Square Meter',
            'Cubic Meter',
            'Foot',
            'Inch',
            'Gallon',
            'Ounce',
            'Pound',
            'Ton',
            'Box',
            'Bag',
            'Packet',
            'Bottle',
        ];

        foreach ($units as $unit) {
            DB::table('unites')->insert([
                'unite' => $unit,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unites');
    }
};
