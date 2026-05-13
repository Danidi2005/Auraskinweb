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
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('category'); // e.g., FaceCare, BodyCare
        $table->string('type');     // e.g., Cleanser, Serum, Moisturizer
        $table->decimal('price', 10, 2); // Handles LKR prices correctly
        $table->text('description');
        $table->string('image');    // This will store filenames like 'serum_1.png'
        $table->integer('stock')->default(10); // Handles In Stock / Out of Stock logic
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
