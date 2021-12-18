<?php

namespace App\Http\Controllers;

use App\Models\PelayananProduk;
use Illuminate\Http\Request;

class PelayananProdukController extends Controller
{
    public function __construct()
    {
        // $this->P_ProdukModel = new P_ProdukModel();
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pelayanan_produk', [
            "pelayanan_produk" => PelayananProduk::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_p_produk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'kode_pelayanan' => 'required',
                'kategori' => 'required',
                'harga_satuan' => 'required',
            ]
        );

        PelayananProduk::create($validatedData);

        return redirect('/produk/pelayanan')->with('pesan', 'Data Berhasil Ditambahkan !');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PelayananProduk  $pelayananProduk
     * @return \Illuminate\Http\Response
     */
    public function show(PelayananProduk $pelayananProduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PelayananProduk  $pelayananProduk
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $pelayananProduk = PelayananProduk::where('id', $id)->first();
        return view('admin.edit_p_produk', [
            'pelayanan' => $pelayananProduk,
        ]);
        return redirect('/produk/pelayanan')->with('pesan', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PelayananProduk  $pelayananProduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate(
            [
                'kode_pelayanan' => 'required',
                'kategori' => 'required',
                'harga_satuan' => 'required',
            ]
        );

        $pelayananProduk = PelayananProduk::find($id)
            ->update($validatedData);

        return redirect('/produk/pelayanan')->with('pesan', 'Data Berhasil Di Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PelayananProduk  $pelayananProduk
     * @return \Illuminate\Http\Response
     */
    // public function destroy(PelayananProduk $pelayananProduk)
    // {
    //     PelayananProduk::destroy($pelayananProduk->id);
    // }
    public function destroy($id)
    {
        $pelayananProduk = PelayananProduk::find($id);
        $pelayananProduk->delete();
        return redirect('/produk/pelayanan')->with('pesan', 'Data Berhasil Dihapus !');
    }
}
