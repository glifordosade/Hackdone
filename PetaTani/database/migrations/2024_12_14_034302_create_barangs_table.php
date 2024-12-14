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
        Schema::create('barangs', function (Blueprint $table) {
            $table->uuid("ID_Barang")->primary();
            $table->string('ID_Toko');
            $table->foreign("ID_Toko")->references("ID_Toko")->on("tokos")->onDelete("cascade");
            $table->string('Nama_Barang');
            $table->mediumText('Gambar_barang')->charset('binary');
            $table->integer('Harga');
            $table->text('Deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
