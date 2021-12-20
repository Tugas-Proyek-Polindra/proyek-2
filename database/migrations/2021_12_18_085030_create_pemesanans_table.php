<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pemesanan')->unique();
            $table->foreignId('user_id');
            // $table->foreignId('kelola_produk_id');
            $table->foreignId('pelayanan_produk_id');
            $table->foreignId('kelola_kain_id');
            $table->foreignId('kelola_orderan_id');
            $table->integer('jumlah_pemesanan');
            $table->integer('total_bayar');
            $table->string('desain')->nullable();
            $table->timestamp('tgl_pesanan')->nullable();
            $table->timestamp('tgl_deadline')->nullable();
            $table->string('deskripsi')->nullable();

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
        Schema::dropIfExists('pemesanans');
    }
}
