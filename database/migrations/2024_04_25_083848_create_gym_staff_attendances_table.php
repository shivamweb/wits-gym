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
        Schema::create('gym_staff_attendances', function (Blueprint $table) {
            $table->id();
            $table->uuid()->index();
            $table->integer('gym_staff_id');
            $table->integer('gym_id');
            $table->float('day1');
            $table->float('day2');
            $table->float('day3');
            $table->float('day4');
            $table->float('day5');
            $table->float('day6');
            $table->float('day7');
            $table->float('day8');
            $table->float('day9');
            $table->float('day10');
            $table->float('day11');
            $table->float('day12');
            $table->float('day13');
            $table->float('day14');
            $table->float('day15');
            $table->float('day16');
            $table->float('day17');
            $table->float('day18');
            $table->float('day19');
            $table->float('day20');
            $table->float('day21');
            $table->float('day22');
            $table->float('day23');
            $table->float('day24');
            $table->float('day25');
            $table->float('day26');
            $table->float('day27');
            $table->float('day28');
            $table->float('day29');
            $table->float('day30');
            $table->float('day31');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gym_staff_attendances');
    }
};
