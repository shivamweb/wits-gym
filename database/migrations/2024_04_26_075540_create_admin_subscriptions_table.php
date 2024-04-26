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
        Schema::create('admin_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            $table->integer('status');
            $table->string('subscription_name');
            $table->float('amount');
            $table->date('start_date');
            $table->integer('validity');
            $table->longText('description');
            $table->longText('image');
            $table->integer('plan_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_subscriptions');
    }
};
