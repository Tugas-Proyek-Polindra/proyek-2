<?php

namespace App\Http\Controllers;

use App\Models\KelolaKain;
use Illuminate\Http\Request;

class KelolaKainController extends Controller
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
        return view('admin.kelola_kain', [
            "kelola_kain" => KelolaKain::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_k_kain');
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
        $validatedData = $request->validate(
            [
                'kode_kain' => 'required',
                'nama_kain' => 'required',
            ]
        );

        KelolaKain::create($validatedData);

        return redirect('/produk/kelola_kain')->with('pesan', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KelolaKain  $kelolaKain
     * @return \Illuminate\Http\Response
     */
    public function show(KelolaKain $kelolaKain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KelolaKain  $kelolaKain
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelolaKain = KelolaKain::where('id', $id)->first();
        return view('admin.edit_k_kain', [
            'kain' => $kelolaKain,
        ]);
        return redirect('/produk/kelola_kain')->with('pesan', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KelolaKain  $kelolaKain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate(
            [
                'kode_kain' => 'required',
                'nama_kain' => 'required',
            ]
        );

        $kelolaKain = KelolaKain::find($id)
            ->update($validatedData);

        return redirect('/produk/kelola_kain')->with('pesan', 'Data Berhasil Di Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KelolaKain  $kelolaKain
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelolaKain = KelolaKain::find($id);
        $kelolaKain->delete();
        return redirect('/produk/kelola_kain')->with('pesan', 'Data Berhasil Dihapus !');
    }
}
