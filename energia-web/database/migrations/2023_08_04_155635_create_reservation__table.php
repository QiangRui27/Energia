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
        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('lastname1');
            $table->string('lastname2');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('dni')->nullable();
            $table->date('reservation_date');
            $table->integer('user_id')_nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_');
    }
};
