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
        Schema::create('pembelians', function (Blueprint $table) {
            $table->increments('Id_Pembelian');

            $table->integer('Id_User')->unsigned();
            $table->foreign('Id_User')->references('Id_User')->on('users')->onDelete('cascade');

            $table->integer('Id_Supplier')->unsigned();
            $table->foreign('Id_Supplier')->references('Id_Supplier')->on('suppliers')->onDelete('cascade');
            
            $table->string('No_Nota');
            $table->date('Tanggal');
            $table->date('Tanggal_Jatuh_Tempo');
            $table->integer('Total');
            $table->string('Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelians');
    }
};
