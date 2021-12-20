<?php

namespace App\Http\Controllers;

use App\Models\KelolaProduk;
use App\Models\KelolaKain;
use App\Models\PelayananProduk;
use Illuminate\Http\Request;

class KelolaProdukController extends Controller
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
        return view('admin.kelola_produk', [
            "kelola_produk" => KelolaProduk::all(),
            "kelola_kain" => KelolaKain::all(),
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
        return view('admin.add_k_produk', [
            "kelola_produk" => KelolaProduk::all(),
            "kelola_kain" => KelolaKain::all(),
            "pelayanan_produk" => PelayananProduk::all()
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
                'kode_produk' => 'required',
                'nama_produk' => 'required',
                'ukuran' => 'required',
                'model' => 'required',
                'desain' => 'required',
                'detail' => 'required',
                'img' => 'required|mimes:jpg,jpeg,bmp,png|max:2048kb',
                'pelayanan_produk_id' => 'required',
                'kelola_kain_id' => 'required',
            ]
        );


        $validatedData['img'] = $request->file('img')->store('produk-images');

        KelolaProduk::create($validatedData);

        return redirect('/produk')->with('pesan', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KelolaProduk  $kelolaProduk
     * @return \Illuminate\Http\Response
     */
    public function show(KelolaProduk $kelolaProduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KelolaProduk  $kelolaProduk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelolaProduk = KelolaProduk::where('id', $id)->first();
        return view('admin.edit_k_produk', [
            'kelola_produk' => $kelolaProduk,
            // "kelola_produk" => KelolaProduk::all(),
            "kelola_kain" => KelolaKain::all(),
            "pelayanan_produk" => PelayananProduk::all()
        ]);
        return redirect('/produk')->with('pesan', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KelolaProduk  $kelolaProduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate(
            [
                'kode_produk' => 'required',
                'nama_produk' => 'required',
                'ukuran' => 'required',
                'model' => 'required',
                'desain' => 'required',
                'detail' => 'required',
                // 'foto' => 'required',
                'pelayanan_produk_id' => 'required',
                'kelola_kain_id' => 'required',
            ]
        );

        $kelolaProduk = KelolaProduk::find($id)
            ->update($validatedData);

        return redirect('/produk')->with('pesan', 'Data Berhasil Di Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KelolaProduk  $kelolaProduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelolaProduk = KelolaProduk::find($id);
        $kelolaProduk->delete();
        return redirect('/produk')->with('pesan', 'Data Berhasil Dihapus !');
    }
}
