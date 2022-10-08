<?php

namespace App\Http\Controllers;

use App\peminjaman;
use App\barang;
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
        $barang = barang::all();
        $peminjaman = peminjaman::all();
        return view('barang.index',compact('barang','peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = barang::all();
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
        $this->validate($request,[    
    		'nm_barang' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required',
            'jumlah' => 'required',
            'jenis' => 'required',
            'tgl_regis' => 'required',
            'ruang' => 'required',
    	]);
 
        barang::create([
    		'nm_barang' => $request->nm_barang,
            'kondisi' => $request->kondisi,
            'keterangan' => $request->keterangan,
            'jumlah' => $request->jumlah,
            'jenis' => $request->jenis,
            'tgl_regis' => $request->tgl_regis,
            'ruang' => $request->ruang,
    	]);
 
    	return redirect('barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = barang::where('id_barang',$id)->first();
        return view('barang.show',compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = barang::find($id);
        return view('barang.edit', ['barang' => $barang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $this->validate($request,[
            'nm_barang' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required',
            'jumlah' => 'required',
            'jenis' => 'required',
            'tgl_regis' => 'required',
            'ruang' => 'required',
         ]);
      
         $barang = barang::find($id);
         $barang->nm_barang = $request->nm_barang;
         $barang->kondisi = $request->kondisi;
         $barang->keterangan = $request->keterangan;
         $barang->jumlah = $request->jumlah;
         $barang->jenis = $request->jenis;
         $barang->tgl_regis = $request->tgl_regis;
         $barang->ruang = $request->ruang;
         $barang->save();
         return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = barang::find($id);
        $barang->delete();
        return redirect('/barang');
    }
}
