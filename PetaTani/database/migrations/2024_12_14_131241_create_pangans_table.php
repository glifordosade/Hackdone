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
        Schema::create('pangans', function (Blueprint $table) {
            $table->uuid("ID_Pangan")->primary();
            $table->string("ID_Provinsi");
            $table->foreign("ID_Provinsi")->references("ID_Provinsi")->on("provinsis")->onDelete("cascade");
            $table->string("Jenis_Pangan");
            $table->integer("Jumlah");
            $table->integer("Tahun");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pangans');
    }
};
