<?php

namespace Database\Seeders;

use App\Models\BuktiPembayaran;
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
        KelolaKain::create([
            'kode_kain' => 'K-002',
            'nama_kain' => 'Katun Konbad'
        ]);
        KelolaKain::create([
            'kode_kain' => 'K-003',
            'nama_kain' => 'Oxford'
        ]);
        KelolaKain::create([
            'kode_kain' => 'K-004',
            'nama_kain' => 'Flanel'
        ]);

        KelolaOrderan::create([
            'kode_order' => 'O-001',
            'jumlah_orderan' => 'Satuan',
            'pcs' => 1
        ]);

        KelolaOrderan::create([
            'kode_order' => 'O-002',
            'jumlah_orderan' => '1 Lusin',
            'pcs' => 12
        ]);

        KelolaOrderan::create([
            'kode_order' => 'O-003',
            'jumlah_orderan' => '2 Lusin',
            'pcs' => 24
        ]);

        KelolaOrderan::create([
            'kode_order' => 'O-004',
            'jumlah_orderan' => 'Ratusan',
            'pcs' => 100
        ]);

        PelayananProduk::create([
            // 'slug' => 'sablon-kaos',
            'kode_pelayanan' => '01',
            'kategori' => 'Sablon Kaos',
            'harga_satuan' => 60000
        ]);

        PelayananProduk::create([
            'kode_pelayanan' => '02',
            'kategori' => 'Sablon Bordir',
            'harga_satuan' => 85000
        ]);

        PelayananProduk::create([
            'kode_pelayanan' => '03',
            'kategori' => 'Jaket',
            'harga_satuan' => 170000
        ]);

        PelayananProduk::create([
            'kode_pelayanan' => '04',
            'kategori' => 'Kemeja',
            'harga_satuan' => 165000
        ]);

        PelayananProduk::create([
            'kode_pelayanan' => '05',
            'kategori' => 'Jersey Printing',
            'harga_satuan' => 150000
        ]);

        // KelolaProduk::create([
        //     // 'slug' => 'sablon-kaos-1',
        //     'kode_produk' => 1111,
        //     'pelayanan_produk_id' => 1,
        //     'kelola_kain_id' => 1,
        //     'nama_produk' => 'Kaos Sablon',
        //     'ukuran' => 'L',
        //     'model' => 'Pendek',
        //     'desain' => 'Sendiri',
        //     'example' => 'kaos_sablon.png',
        //     'detail' => 'Kaos yang ukurannya disesuaikan pelanggannya',
        // ]);

        // BuktiPembayaran::create([
        //     'kode_buktibayar' => '12333',
        //     'user_id' => 1,
        //     'status_bayar' => 'Lunas',
        //     'validasi_pembayaran' => ' Valid',
        //     'bukti' => ' bukti.jpeg',
        //     'deskripsi' => 'Alhamdulillah selesai'
        // ]);

        // Pemesanan::create([
        //     'kode_pemesanan' => 'P-001',
        //     'user_id' => '3',
        //     'pelayanan_produk_id' => '1',
        //     'kelola_kain_id' => '1',
        //     'kelola_orderan_id' => '1',
        //     'tgl_pesanan' => Carbon::createFromFormat('Y-m-d', '2021-12-01')->toDateTimeImmutable(),
        //     'tgl_deadline' => Carbon::createFromFormat('Y-m-d', '2021-12-02')->toDateTimeImmutable(),
        //     'desain' => 'kaos_sablon.jpeg',
        //     'deskripsi' => 'Pemesanan Pelanggan Pertama Kali'
        // ]);

        // InvoicePemesanan::create([
        //     'pemesanan_id' => 1,
        //     'user_id' => 3,
        //     'pelayanan_produk_id' => 1,
        //     'kelola_kain_id' => 1,
        //     'kelola_orderan_id' => 1,

        //     'jumlah_pemesanan' => 100,
        //     'total_bayar' => 800000,
        //     'status_pembayaran' => 'ongoing',
        //     'status_pemesanan' => 'onproses',
        //     'status_barang' => 'onproses'
        // ]);
    }
}
