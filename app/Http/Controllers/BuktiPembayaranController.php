<?php

namespace App\Http\Controllers;

use App\Models\BuktiPembayaran;
use Illuminate\Http\Request;

class BuktiPembayaranController extends Controller
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
        return view('pelanggan.bukti_pembayaran', [
            "kelola_buktibayar" => BuktiPembayaran::all()
        ]);
    }

    public function bukti_bayar()
    {
        return view('pelanggan.bukti_pembayaran', [
            "kelola_buktibayar" => BuktiPembayaran::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan.add_buktipembayaran', [
            "kelola_buktibayar" => BuktiPembayaran::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
        // ddd($request);
        $validatedData = $request->validate(
            [
                'kode_buktibayar' => 'required',
                'status_bayar' => 'required',
                // 'validasi_pembayaran' => 'required',
                // 'bukti' => 'required',
                // 'detail' => 'required',
            ]
        );

        //?jika validasi tidak ada maka lakukan simpan data
        //upload gambar/foto 
        // $file = $request->

        BuktiPembayaran::create($validatedData);

        return redirect('/pelanggan-buktibayar')->with('pesan', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BuktiPembayaran  $buktiPembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(BuktiPembayaran $buktiPembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BuktiPembayaran  $buktiPembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(BuktiPembayaran $buktiPembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BuktiPembayaran  $buktiPembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BuktiPembayaran $buktiPembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BuktiPembayaran  $buktiPembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuktiPembayaran $buktiPembayaran)
    {
        //
    }
}
