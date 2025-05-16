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
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('serial_number')->unique();
            $table->string('model')->nullable();
            $table->string('brand')->nullable();
            $table->string('type')->nullable();
            $table->string('condition', ['Active','Repires','Obsolete'])->default('Active');
            $table->foreignId('department_id');
            $table->foreignId('district_id');
            $table->foreignId('region_id');
            $table->foreignId('office_id');
            $table->foreignId('user_id');
            $table->string('updated_by')->nullable();
            $table->string('created_by')->nullable();
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipments');
    }
};
