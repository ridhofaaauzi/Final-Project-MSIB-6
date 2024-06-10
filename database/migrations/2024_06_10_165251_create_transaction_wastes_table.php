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
        Schema::create('transaction_wastes', function (Blueprint $table) {
            $table->id();
            $table->integer('berat_sampah');
            $table->integer('total_poin')->default(0);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('waste_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_wastes');
    }
};