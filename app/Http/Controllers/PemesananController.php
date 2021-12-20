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
            "invoice_pemesanan" => InvoicePemesanan::all(),

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
            "invoice_pemesanan" => InvoicePemesanan::all()
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
                'deskripsi' => 'required',
                'user_id' => 'required',
                'pelayanan_produk_id' => 'required',
                'kelola_kain_id' => 'required',
                'kelola_orderan_id' => 'required'
            ]
        );

        $validatedData['desain'] = $request->file('desain')->store('desain-images');
        Pemesanan::create($validatedData);

        // $invoiceValidatedData = $request->validate(
        //     []
        // );

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
    public function edit(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePemesananRequest  $request
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePemesananRequest $request, Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemesanan $pemesanan)
    {
        //
    }
}
