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
        Schema::create('announcements_skills', function (Blueprint $table) {
            $table->unsignedBigInteger('announcement_id');
            $table->unsignedBigInteger('skill_id');
            $table->foreign('announcement_id')
            ->references('id')->on('announcements')->onDelete('cascade');
            $table->foreign('skill_id')
            ->references('id')->on('skills')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcements_skills');
    }
};
