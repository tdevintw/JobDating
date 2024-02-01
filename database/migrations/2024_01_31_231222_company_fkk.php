<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migratwion
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::table('announcements', function (Blueprint $table) {
        $table->foreign('company_id')
            ->references('id')->on('companies')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
