<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSewaDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewa_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sewaId')->constrained('sewa')->onDelete('cascade')->onUpdate('cascade');
            $table->string('productId');
            $table->string('namaProduct');
            $table->string('quantity');
            $table->string('tanggalSewa');
            $table->string('tanggalPengembalian');
            $table->string('lamaSewa');
            $table->string('jamSewa');
            $table->string('jamPengembalian');
            $table->string('biayaSewa');
            $table->string('subBiayaSewa');
            $table->string('pembayaran');
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
        Schema::dropIfExists('sewa_details');
    }
}
