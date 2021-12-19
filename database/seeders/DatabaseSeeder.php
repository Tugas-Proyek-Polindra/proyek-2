<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\InvoicePemesanan;
use App\Models\User;
use App\Models\KelolaKain;
use App\Models\KelolaProduk;
use App\Models\PelayananProduk;
use App\Models\KelolaBuktiBayar;
use App\Models\KelolaOrderan;
use App\Models\Pemesanan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'alamat' => 'Indramayu',
            'no_hp' => '082647583765',
            'foto' => 'emah.jpg',
            'level' => 1
        ]);

        User::create([
            'name' => 'Pemilik',
            'email' => 'kafka_konveksi@gmail.com',
            'password' => bcrypt('kafka123'),
            'alamat' => 'Indramayu',
            'no_hp' => '082647537265',
            'foto' => 'emah.jpg',
            'level' => 2
        ]);

        User::create([
            'name' => 'Pelanggan',
            'email' => 'pelanggan1@gmail.com',
            'password' => bcrypt('pelanggan123'),
            'alamat' => 'Indramayu',
            'no_hp' => '082643827765',
            'foto' => 'emah.jpg',
            'level' => 0
        ]);

        KelolaKain::create([
            'kode_kain' => 'K-001',
            'nama_kain' => 'Katun'
        ]);

        KelolaOrderan::create([
            'kode_order' => 'O-001',
            'jumlah_orderan' => '2 Lusin',
            'pcs' => 24
        ]);

        PelayananProduk::create([
            // 'slug' => 'sablon-kaos',
            'kode_pelayanan' => '01',
            'kategori' => 'Sablon Kaos',
            'harga_satuan' => 60000
        ]);

        KelolaProduk::create([
            // 'slug' => 'sablon-kaos-1',
            'kode_produk' => 1111,
            'pelayanan_produk_id' => 1,
            'kelola_kain_id' => 1,
            'nama_produk' => 'Kaos Sablon',
            'ukuran' => 'L',
            'model' => 'Pendek',
            'desain' => 'Sendiri',
            'foto' => 'kaos_sablon.png',
            'detail' => 'Kaos yang ukurannya disesuaikan pelanggannya',
        ]);

        KelolaBuktiBayar::create([
            'kode_buktibayar' => '12333',
            'user_id' => 1,
            'status_bayar' => 'Lunas',
            'validasi_pembayaran' => ' Valid',
            'bukti' => ' bukti.jpg',
            'detail' => 'Alhamdulillah selesai'
        ]);

        Pemesanan::create([
            'kode_pemesanan' => 'P-001',
            'user_id' => '3',
            // 'kelola_produk_id' => '1',
            'pelayanan_produk_id' => '1',
            'kelola_kain_id' => '1',
            'kelola_orderan_id' => '1',
            'tgl_pesanan' => Carbon::createFromFormat('Y-m-d', '2021-12-01')->toDateTimeImmutable(),
            'tgl_deadline' => Carbon::createFromFormat('Y-m-d', '2021-12-02')->toDateTimeImmutable(),
            'desain' => 'kaos_sablon.png',
            'deskripsi' => 'Pemesanan Pelanggan Pertama Kali'
        ]);

        // InvoicePemesanan::create([
        //     'pemesanan_id' => 1,
        //     'user_id' => 3,
        //     'jumlah_pemesanan' => 100,
        //     'kelola_produk_id' => 1,
        //     'total_bayar' => 800000,
        //     'tgl_pesanan' => Carbon::createFromFormat('Y-m-d', '2021-12-01')->toDateTimeImmutable(),
        //     'tgl_deadline' => Carbon::createFromFormat('Y-m-d', '2021-12-02')->toDateTimeImmutable(),
        //     // 'tgl_pesanan' => new \DateTime,
        //     // 'tgl_deadline' => new \DateTime,
        //     'status_pembayaran' => 'Lunas',
        //     'status_pemesanan' => 'Proses',
        //     'status_barang' => 'Diterima'
        // ]);
    }
}
