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
        Schema::create('wishlists', function (Blueprint $table) {
            $table->uuid("ID_Wishlist");
            $table->string("ID_Barang");
            $table->foreign("ID_Barang")->references("ID_Barang")->on("barangs")->onDelete("cascade");
            $table->string("ID_User");
            $table->foreign("ID_User")->references("ID_User")->on("users")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wishlists');
    }
};
