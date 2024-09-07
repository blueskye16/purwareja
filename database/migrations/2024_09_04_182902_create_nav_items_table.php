<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nav_items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // Correct foreign key definition
            $table->string('post_slug')->nullable();
            $table->foreign('post_slug')
                ->references('slug')
                ->on('posts')
                ->onDelete('cascade');
            $table->string('category_slug')->nullable();
            $table->foreign('category_slug')
                ->references('slug')
                ->on('categories')
                ->onDelete('cascade');
            $table->string('title')->nullable();
            $table->string('url')->nullable();
        });
    }
    // {
    //     Schema::create('nav_items', function (Blueprint $table) {
    //         $table->id();
    //         // $table->nav_type(); // foreign key, ngedevinisiin data yg disimpen postingan / kategori
    //         $table->timestamps();
    //         $table->foreign('post_slug')->nullable()->refrences('slug')->on('posts')->onDelete('cascade');
    //         $table->foreign('category_slug')->nullable()->refrences('slug')->on('categories')->onDelete('cascade');
    //         // $table->integer('nav_order')->nullable(); // buat ngatur urutan navigasinya
    //         $table->string('title')->nullable();
    //         $table->string('url')->nullable();
    //     });
    // }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nav_items');
    }
};
