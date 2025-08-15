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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('article');
            $table->text('description')->nullable();
            $table->string('property_number')->unique();
            $table->string('serial_number')->nullable();
            $table->string('model_number')->nullable();
            $table->string('unit_of_measure');
            $table->integer('qty_property_card')->default(0);
            $table->integer('qty_physical_count')->default(0);
            $table->date('acquisition_date')->nullable();
            $table->decimal('unit_value', 12, 2)->default(0.00);
            $table->string('person_accountable');
            $table->integer('shortage')->default(0);
            $table->string('category')->nullable();
            $table->text('remarks')->nullable();
            $table->string('file_path')->nullable();
            $table->string('file_path1')->nullable();
            $table->string('file_path2')->nullable();
            $table->string('file_path3')->nullable();
            $table->string('file_path4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
