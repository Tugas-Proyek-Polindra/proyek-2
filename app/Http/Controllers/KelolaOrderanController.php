<?php

namespace App\Http\Controllers;

use App\Models\KelolaOrderan;
use Illuminate\Http\Request;

class KelolaOrderanController extends Controller
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
        return view('admin.kelola_orderan', [
            "kelola_orderan" => KelolaOrderan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_k_orderan');
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
                'kode_order' => 'required',
                'jumlah_orderan' => 'required',
                'pcs' => 'required'
            ]
        );

        KelolaOrderan::create($validatedData);

        return redirect('/produk/kelola_orderan')->with('pesan', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\  $kelolaOrderan
     * @return \Illuminate\Http\Response
     */
    public function show(KelolaOrderan $kelolaOrderan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KelolaOrderan  $kelolaOrderan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelolaOrderan = KelolaOrderan::where('id', $id)->first();
        return view('admin.edit_k_orderan', [
            'orderan' => $kelolaOrderan,
        ]);
        return redirect('/produk/kelola_orderan')->with('pesan', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KelolaOrderan  $kelolaOrderan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate(
            [
                'kode_order' => 'required',
                'jumlah_orderan' => 'required',
                'pcs' => 'required'
            ]
        );

        $kelolaOrderan = KelolaOrderan::find($id)
            ->update($validatedData);

        return redirect('/produk/kelola_orderan')->with('pesan', 'Data Berhasil Di Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KelolaOrderan  $kelolaOrderan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelolaOrderan = KelolaOrderan::find($id);
        $kelolaOrderan->delete();
        return redirect('/produk/kelola_orderan')->with('pesan', 'Data Berhasil Dihapus !');
    }
}
