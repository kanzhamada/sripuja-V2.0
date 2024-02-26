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
        Schema::create('karyawans', function (Blueprint $table) {
            $table->increments('Id_Karyawan');

            $table->integer('Id_User')->unsigned();
            $table->foreign('Id_User')->references('Id_User')->on('users')->onDelete('cascade');
            
            $table->string('Alamat');
            $table->string('Telepon')->nullable();
            $table->string('NoHP');
            $table->integer('Gaji');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};
