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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->text('thumb')->nullable();
            $table->string('price', 20)->nullable();
            $table->string('series', 100)->nullable();
            $table->date('sale_date', 100)->nullable();
            $table->string('type')->nullable();
            $table->json('artists')->nullable();
            $table->json('writers')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
