<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\User;
use App\Models\KelolaKain;
use App\Models\KelolaOrderan;
use App\Models\PelayananProduk;
use App\Models\InvoicePemesanan;
use Illuminate\Http\Request;
use App\Http\Requests\StorePemesananRequest;
use App\Http\Requests\UpdatePemesananRequest;

class PemesananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pelanggan.invoice_pemesanan', [
            "pemesanan" => Pemesanan::all(),
            "users" => User::all(),
            "kelola_kain" => KelolaKain::all(),
            "kelola_orderan" => KelolaOrderan::all(),
            "pelayanan_produk" => PelayananProduk::all()
        ]);
    }

    public function invoice()
    {
        return view('admin.kelola_invoice_pemesanan', [
            "pemesanan" => Pemesanan::all(),
            "users" => User::all(),
            "kelola_kain" => KelolaKain::all(),
            "kelola_orderan" => KelolaOrderan::all(),
            "pelayanan_produk" => PelayananProduk::all(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan.pemesanan', [
            "pemesanan" => Pemesanan::all(),
            "users" => User::all(),
            "kelola_kain" => KelolaKain::all(),
            "kelola_orderan" => KelolaOrderan::all(),
            "pelayanan_produk" => PelayananProduk::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePemesananRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        // ddd($request);

        $validatedData = $request->validate(
            [
                'kode_pemesanan' => 'required',
                'desain' => 'required|mimes:jpg,jpeg,bmp,png|max:2048kb',
                'tgl_pesanan' => 'required|date|date_format:Y-m-d',
                'tgl_deadline' => 'required|date|date_format:Y-m-d',
                'jumlah_pemesanan' => 'required',
                'total_bayar' => 'required',
                'deskripsi' => 'required',
                'user_id' => 'required',
                'pelayanan_produk_id' => 'required',
                'kelola_kain_id' => 'required',
                'kelola_orderan_id' => 'required'
            ]
        );

        $validatedData['desain'] = $request->file('desain')->store('desain-images');
        Pemesanan::create($validatedData);

        return redirect('/pemesanan')->with('pesan', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pemesanan = Pemesanan::where('id', $id)->first();

        return view('admin.edit_pemesanan', [
            "pemesanan" => $pemesanan,
            "users" => User::all(),
            "kelola_kain" => KelolaKain::all(),
            "kelola_orderan" => KelolaOrderan::all(),
            "pelayanan_produk" => PelayananProduk::all(),
        ]);

        return redirect('/pemesanan/invoice')->with('pesan', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request;

        $validatedData = $request->validate(
            [
                'kode_pemesanan' => 'required',
                'status_pembayaran' => 'required',
                'status_pemesanan' => 'required',
                'status_barang' => 'required',

                // 'desain' => 'required|mimes:jpg,jpeg,bmp,png|max:2048kb',
                // 'tgl_pesanan' => 'required|date|date_format:Y-m-d',
                // 'tgl_deadline' => 'required|date|date_format:Y-m-d',
                'jumlah_pemesanan' => 'required',
                'total_bayar' => 'required',
                'deskripsi' => 'required',
                'user_id' => 'required',
                'pelayanan_produk_id' => 'required',
                'kelola_kain_id' => 'required',
                'kelola_orderan_id' => 'required'
            ]
        );

        $pemesanan = Pemesanan::find($id)
            ->update($validatedData);

        return redirect('/pemesanan/invoice')->with('pesan', 'Data Berhasil Di Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemesanan = Pemesanan::find($id);
        $pemesanan->delete();
        return redirect('/pemesanan/invoice')->with('pesan', 'Data Berhasil Dihapus !');
    }
}
