<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan membuat halaman web
        $barang = barang::all();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mengimput data
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi form
        $request->validate([
            'kode_barang' => 'required',
            'kode_nama' => 'required',
            'kode_kateogori' => 'required',
            'harga' => 'required',
            'qty' => 'required',
        ]);

        //simpan data
        barang::create($request->all());
        return redirect()->route('barang.index')
                         ->with('success','berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(barang $barang)
    {
        //menampilkan data yang sudah diedit
        return view('barang.edit', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(barang $barang)
    {
        //menjalankan perintah edit
        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, barang $barang)
    {
        //menjalankan perintah update, funcion validasi
        $request->validate([
            'kode_barang' => 'required',
            'kode_nama' => 'required',
            'kode_kateogori' => 'required',
            'harga' => 'required',
            'qty' => 'required',
        ]);

        //function update
        $barang->update($request->all());
        return redirect()->route('barang.idex')
                         ->with('succsess','selesai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(barang $barang)
    {
        //perintah delete
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'berhasil dihapus')
    }
}
