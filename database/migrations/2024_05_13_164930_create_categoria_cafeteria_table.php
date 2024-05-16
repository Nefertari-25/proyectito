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
        Schema::create('categoria_cafeteria', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cafeteria_id');
            $table->unsignedBigInteger('categoria_id');
            $table->timestamps();

            $table->foreign('cafeteria_id')->references('id')->on('cafeterias')->onDelete('cascade');
            $table->foreign('categoria_id')->references('id')->on('categoria')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoria_cafeteria');
    }
};
