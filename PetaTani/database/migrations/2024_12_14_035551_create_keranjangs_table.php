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
        Schema::create('keranjangs', function (Blueprint $table) {
            $table->uuid("ID_Keranjang");
            $table->string("ID_Barang");
            $table->foreign("ID_Barang")->references("ID_Barang")->on("barangs")->onDelete("cascade");
            $table->string("ID_User");
            $table->integer("Jumlah_Barang");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjangs');
    }
};
