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
        Schema::create('product_tables', function (Blueprint $table) {
            $table->id();
            $table->string('product_title');
            $table->string('product_price');
            $table->text('product_description');
            $table->integer('product_qunatity');
            $table->timestamps();
            $table->string('product_image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_tables');
    }
};
