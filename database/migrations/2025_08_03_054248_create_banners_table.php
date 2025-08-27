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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('welcome_text')->nullable(); // "Welcome to shopery"
            $table->string('main_title'); // "Fresh & Healthy Organic Food"
            $table->string('subtitle')->nullable(); // "Sale up to 30% OFF"
            $table->text('description')->nullable(); // "Free shipping on all your order..."
            $table->string('image'); // banner image path
            $table->string('button_text')->default('Shop now'); // "Shop now"
            $table->string('button_link')->nullable(); // button URL
            $table->boolean('status')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
