<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelolaProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelola_produks', function (Blueprint $table) {
            $table->id();
            $table->string('kode_produk');
            $table->foreignId('pelayanan_produk_id');
            $table->foreignId('kelola_kain_id');
            $table->string('nama_produk');
            $table->string('ukuran');
            $table->string('model');
            $table->string('desain');
            $table->string('foto')->nullable();
            $table->text('detail')->nullable();
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
        Schema::dropIfExists('kelola_produks');
    }
}
