<?php

namespace App\Http\Controllers;

use App\Models\BuktiPembayaran;
use App\Models\User;
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
            "bukti_pembayaran" => BuktiPembayaran::all(),
            "users" => User::all()
        ]);
    }

    public function bukti_bayar()
    {
        return view('admin.kelola_buktibayar', [
            "kelola_buktibayar" => BuktiPembayaran::all(),
            "users" => User::all()
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
            "bukti_pembayaran" => BuktiPembayaran::all(),
            "users" => User::all()
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
        // return $request;
        // ddd($request);
        $validatedData = $request->validate(
            [
                'kode_buktibayar' => 'required',
                'user_id' => 'required',
                'status_bayar' => 'required',
                'validasi_pembayaran' => 'required',
                'bukti' => 'required|mimes:jpg,jpeg,bmp,png|max:2048kb',
                'deskripsi' => 'required',
            ]
        );

        $validatedData['bukti'] = $request->file('bukti')->store('bukti-images');

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
        return view('pelanggan.detail_buktipembayaran', [
            "bukti_pembayaran" => BuktiPembayaran::all(),
            "users" => User::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BuktiPembayaran  $buktiPembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buktiPembayaran = BuktiPembayaran::where('id', $id)->first();
        return view('admin.edit_k_buktibayar', [
            'bukti_pembayaran' => $buktiPembayaran,
            "users" => User::all()

        ]);
        return redirect('/bukti-bayar')->with('pesan', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BuktiPembayaran  $buktiPembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate(
            [
                'kode_buktibayar' => 'required',
                'user_id' => 'required',
                'status_bayar' => 'required',
                'validasi_pembayaran' => 'required',
                // 'bukti' => 'required|mimes:jpg,jpeg,bmp,png|max:2048kb',
                'deskripsi' => 'required',
            ]
        );

        $validatedData['bukti'] = $request->file('bukti')->store('bukti-images');

        $buktiPembayaran = BuktiPembayaran::find($id)
            ->update($validatedData);

        return redirect('/bukti-bayar')->with('pesan', 'Data Berhasil Di Update !');
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
