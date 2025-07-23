<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('author', 255);
            $table->text('summary')->nullable();
            $table->string('cover', 255)->nullable(); 
            $table->integer('stok')->default(0); 
            $table->foreignId('genre_id')
                  ->constrained('genres')
                  ->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('books');
    }
};
