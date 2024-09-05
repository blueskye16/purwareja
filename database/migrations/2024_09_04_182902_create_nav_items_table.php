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
        Schema::create('nav_items', function (Blueprint $table) {
            $table->id();
            // $table->nav_type(); // foreign key, ngedevinisiin data yg disimpen postingan / kategori
            $table->timestamps();
            $table->foreignId('slug')->nullable()->constrained(
                table: 'posts',
                indexName: 'nav_items_post_slug'
            );
            $table->foreignId('slug')->nullable()->constrained(
                table: 'categories',
                indexName: 'nav_items_categories_slug'
            );
            // $table->integer('nav_order')->nullable(); // buat ngatur urutan navigasinya
            $table->string('title')->nullable();
            $table->string('url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nav_items');
    }
};
