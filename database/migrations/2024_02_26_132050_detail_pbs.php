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
        Schema::create('detail_pbs', function (Blueprint $table) {
            $table->integer('Id_Barang')->unsigned()->index();
            $table->foreign('Id_Barang')->references('Id_Barang')->on('barangs')->onDelete('cascade');

            $table->integer('Id_Pembelian')->unsigned()->index();
            $table->foreign('Id_Pembelian')->references('Id_Pembelian')->on('pembelians')->onDelete('cascade');

            $table->integer('Sisa');
            $table->integer('Sub_Total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pbs');
    }
};
