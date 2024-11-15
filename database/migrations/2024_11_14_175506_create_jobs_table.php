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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('job_type');
            $table->string('work_authorization');
            $table->string('hour_start');
            $table->string('hour_end');
            $table->string('schedule');
            $table->string('pay_period');
            $table->string('salary_start');
            $table->string('salary_end');
            $table->string('benefits');
            $table->mediumText('description');
            $table->string('document');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
