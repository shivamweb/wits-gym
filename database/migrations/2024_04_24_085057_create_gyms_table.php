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
        Schema::create('gyms', function (Blueprint $table) {
            $table->id();  
            $table->uuid('uuid')->unique();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('gym_name');
            $table->longText('address');
            $table->string('country');
            $table->longText('image');
            $table->string('state');
            $table->string('city');
            $table->string('web_link');
            $table->string('subscription_id');
            $table->string('gym_type');
            $table->longText('terms_and_conditions')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gyms');
    }
};
