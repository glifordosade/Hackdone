<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tokos', function (Blueprint $table) {
            $table->uuid("ID_Toko")->primary();
            $table->string("ID_User")->unique();
            $table->foreign("ID_User")->references("ID_User")->on("users")->onDelete("cascade");
            $table->string("Nama_Toko");
            $table->string("Daerah");
            $table->text("Alamat");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tokos');
    }
};
