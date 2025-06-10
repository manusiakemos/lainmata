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
        Schema::table('kategori_usulan', function (Blueprint $table) {
            $table->unsignedBigInteger('pengajuan_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kategori_usulan', function (Blueprint $table) {
            $table->unsignedBigInteger('pengajuan_id')->nullable(false)->change(); // balik jadi NOT NULL
        });
    }
};
