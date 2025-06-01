<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Tambahkan kolom 'alamat' ke tabel 'users'.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('alamat')->nullable()->after('tanggal_lahir'); // pastikan kolom tanggal_lahir sudah ada
        });
    }

    /**
     * Hapus kolom 'alamat' jika rollback.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('alamat');
        });
    }
};
