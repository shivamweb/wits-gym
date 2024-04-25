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
        Schema::create('gym_coupons', function (Blueprint $table) {
            $table->id();
            $table->uuid()->index();
            $table->integer('gym_id');
            $table->string('name');
            $table->date('from');
            $table->date('to');
            $table->float('amount');
            $table->string('type');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gym_coupons');
    }
};
