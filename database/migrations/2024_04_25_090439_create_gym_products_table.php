<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gym_products', function (Blueprint $table) {
            $table->id();
            $table->uuid()->index();
            $table->integer('gym_id');
            $table->string('product_name');
            $table->string('product_type');
            $table->float('product_price');
            $table->integer('quantity');
            $table->float('product_description');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gym_products');
    }
};
