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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string ('type');
            $table->double('price');
            $table->integer('stock')->default(10);
            $table->string('status')->default('active');
            $table->string('item_description');
            $table->timestamps();
            // $table->id();
            // $table->integer('category_id');
            // $table->string('name');
            // $table->text('image')->nullable();
            // $table->double('price');
            // $table->text('description')->nullable();
            // $table->string('status')->default('active');
            // $table->integer('stock')->default(10);

           

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
