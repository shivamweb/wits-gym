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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->uuid()->index();
            $table->unsignedBigInteger('gym_id');
            $table->unsignedBigInteger('trainer_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('gender');
            $table->string('phone_no');
            $table->string('username');
            $table->string('password');
            $table->longText('image')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('gym_id')
            ->references('id')
            ->on('gyms')
            ->onDelete('cascade');

            $table->foreign('trainer_id')
            ->references('id')
            ->on('gym_staffs')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('users');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
};
