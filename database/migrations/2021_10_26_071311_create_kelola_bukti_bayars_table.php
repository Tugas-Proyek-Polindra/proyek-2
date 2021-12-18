<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelolaBuktiBayarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelola_bukti_bayars', function (Blueprint $table) {
            $table->id();
            $table->string('kode_buktibayar')->unique();
            $table->foreignId('user_id');
            $table->string('status_bayar');
            $table->string('validasi_pembayaran');
            $table->string('bukti')->nullable();
            $table->string('detail');
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
        Schema::dropIfExists('kelola_bukti_bayars');
    }
}
