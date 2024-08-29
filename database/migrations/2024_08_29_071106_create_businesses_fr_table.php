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
        Schema::create('businesses_fr', function (Blueprint $table) {
            $table->id(); // This creates an unsignedBigInteger
            $table->string('name');
            $table->string('slogan');
            $table->foreignId('subcategory_id')->constrained()->onDelete('cascade');
            $table->string('image')->nullable();
            $table->string('logo')->nullable();
            $table->string('location')->nullable();
            $table->string('opening_time')->nullable();
            $table->string('working_days')->nullable();
            $table->string('contact')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses_fr');
    }
};
