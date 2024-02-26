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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('Id_Supplier');
            $table->string('Nama');
            $table->string('Alamat');
            $table->string('Telepon')->nullable();
            $table->string('NoHP');
            $table->string('Fax')->nullable();
            $table->string('Nama_Sales');
            $table->string('Telp_Sales');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
