<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_pemesanans', function (Blueprint $table) {
            $table->id();
            //invoice pemesanan
            $table->foreignId('user_id');
            $table->foreignId('pelayanan_produk_id');
            $table->foreignId('kelola_kain_id');
            $table->foreignId('kelola_orderan_id');
            $table->foreignId('pemesanan_id');

            $table->integer('jumlah_pemesanan');
            $table->integer('total_bayar');
            $table->string('status_pembayaran')->default('ongoing');
            $table->string('status_pemesanan')->default('onproses');
            $table->string('status_barang')->default('onproses');

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
        Schema::dropIfExists('invoice_pemesanans');
    }
}
