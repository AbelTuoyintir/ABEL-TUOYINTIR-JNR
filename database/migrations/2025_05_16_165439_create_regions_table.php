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
       Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('digital_address')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('updated_by')->nullable();
            $table->string('created_by')->nullable();
            $table->timestamps();
        });

        Schema::create('region_user', function (Blueprint $table) {
            $table->foreignId('region_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->primary(['region_id', 'user_id']);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regions');
    }
};
