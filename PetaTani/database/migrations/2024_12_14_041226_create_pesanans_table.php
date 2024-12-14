<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->uuid("ID_Pesanan")->primary();
            $table->string("ID_Toko")->unique();
            $table->foreign("ID_Toko")->references("ID_Toko")->on("tokos")->onDelete("cascade");
            $table->integer("Jumlah_Pesanan");
            $table->string("Barang");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
