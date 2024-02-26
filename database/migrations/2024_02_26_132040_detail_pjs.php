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
        Schema::create('detail_pjs', function (Blueprint $table) {
            $table->integer('Id_Barang')->unsigned()->index();
            $table->foreign('Id_Barang')->references('Id_Barang')->on('barangs')->onDelete('cascade');

            $table->integer('Id_Penjualan')->unsigned()->index();
            $table->foreign('Id_Penjualan')->references('Id_Penjualan')->on('penjualans')->onDelete('cascade');

            $table->integer('Quantity');
            $table->integer('Harga_Jual');
            $table->integer('Harga_Grosir');
            $table->integer('Sub_Total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pjs');
    }
};
