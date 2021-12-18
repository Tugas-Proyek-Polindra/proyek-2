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
            $table->id(); //id_pesanan
            $table->foreignId("pemesanan_id");
            $table->foreignId("user_id");
            $table->foreignId("kelola_produk_id");
            $table->dateTime('tgl_pesanan')->nullable();
            $table->dateTime('tgl_deadline')->nullable();
            $table->integer('jumlah_pemesanan');
            $table->integer('total_bayar');
            $table->string('status_pembayaran');
            $table->string('status_pemesanan');
            $table->string('status_barang');


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
