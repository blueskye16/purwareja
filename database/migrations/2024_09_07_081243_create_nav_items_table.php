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
            $table->string('name');
            $table->string('post_slug')->nullable();
            $table->foreign('post_slug')
                ->references('slug')
                ->on('posts')
                ->onDelete('cascade');
            $table->string('url')->nullable(); // URL or slug reference to posts
            $table->boolean('is_dropdown')->default(false); // Dropdown feature
            $table->timestamps();
        });

        // Schema::create('nav_items', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('title')->nullable();
        //     // Correct foreign key definition
        //     $table->string('post_slug')->nullable();
        //     $table->foreign('post_slug')
        //         ->references('slug')
        //         ->on('posts')
        //         ->onDelete('cascade');
        //     $table->string('category_slug')->nullable();
        //     $table->foreign('category_slug')
        //         ->references('slug')
        //         ->on('categories')
        //         ->onDelete('cascade');
        //     $table->string('url')->nullable();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nav_items');
    }
};
