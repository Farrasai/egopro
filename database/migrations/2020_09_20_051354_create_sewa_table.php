<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSewaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewa', function (Blueprint $table) {
            $table->id();
            $table->string('kodeSewa');
            $table->foreignId('userId')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('totalBiayaSewa');
            $table->string('pembayaran');
            $table->string('status');
            $table->string('bukti_pembayaran')->nullable();
            $table->string('nominal_DP')->nullable();
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
        Schema::dropIfExists('sewa');
    }
}
