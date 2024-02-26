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
        Schema::create('penjualans', function (Blueprint $table) {
            $table->increments('Id_Penjualan');

            $table->integer('Id_User')->unsigned();
            $table->foreign('Id_User')->references('Id_User')->on('users')->onDelete('cascade');

            $table->integer('Id_Customer')->unsigned();
            $table->foreign('Id_Customer')->references('Id_Customer')->on('customers')->onDelete('cascade');
            
            $table->foreignId('Id_Invoice');
            $table->string('No_Nota');
            $table->date('Tanggal');
            $table->integer('Total');
            $table->integer('Sub_Total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualans');
    }
};
