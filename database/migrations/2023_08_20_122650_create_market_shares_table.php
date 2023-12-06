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
        Schema::create('market_shares', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('nrkb')->nullable();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('brand')->nullable();
            $table->string('type')->nullable();
            $table->string('chassis_number')->nullable();
            $table->string('machine_number')->nullable();
            $table->string('color')->nullable();
            $table->string('cc')->nullable();
            $table->integer('year')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('market_shares');
    }
};
