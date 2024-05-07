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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('status')->default('active'); // Agregar el campo status con valor predeterminado 'active'
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::create('parent_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('status')->default('active'); // Agregar el campo status con valor predeterminado 'active'
            $table->text('description')->nullable();
            $table->unsignedBigInteger('category_id'); // Agregar la columna category_id para la relación con la tabla categories
            $table->timestamps();
        
            // Definir la clave foránea
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
        

        Schema::create('meta_data', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parent_categories');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('meta_data');
    }
};
