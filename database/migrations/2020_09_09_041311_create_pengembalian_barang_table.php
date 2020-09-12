<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengembalianBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengembalian_barang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sewaId')->constrained('sewa')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('userId')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('tanggalPengembalian');
            $table->string('jamPengembalian');
            $table->string('denda')->nullable();
            $table->string('status_pengembalian')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengembalian_barang');
    }
}
