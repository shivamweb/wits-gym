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
        Schema::create('user_inquiries', function (Blueprint $table) {
            $table->id();
            $table->uuid()->index();
            $table->integer('user_id');
            $table->integer('gym_id');
            $table->string('inquiry_title');
            $table->longText('inquiry');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_inquiries');
    }
};
