<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('table_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->integer('number'); 
            $table->foreignId('table_categories')->constrained()->onDelete('cascade');  
            $table->decimal('price', 8, 2);
            $table->timestamps();  
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('table_products');
    }
};
