<?php

namespace App\Http\Controllers;

use App\users;
use App\barang;
use App\peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = peminjaman::all();
        $barang = barang::all();
        $users = users::all();
        return view('peminjaman.index',compact('peminjaman','barang','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peminjaman = peminjaman::all();
        $users = users::all();
        $barang = barang::all();
        return view('peminjaman.create',compact('peminjaman', 'barang','users'));
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
            'id_users' => 'required',
            'id_barang' => 'required',   
    		'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
            'status' => 'required',
    	]);
 
        peminjaman::create([
            'id_users' => $request->id_users,
            'id_barang' => $request->id_barang,
    		'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
            'status' => $request->status,
    	]);        
    	return redirect('peminjaman');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show($id_peminjaman)
    {
        $users = users::all();
        $barang = barang::all();
        $peminjaman = peminjaman::where('id_peminjaman',$id_peminjaman)->first();
        return view('peminjaman.show',compact('peminjaman','barang','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = users::all(); 
        $barang = barang::all();
        $peminjaman = peminjaman::find($id);
        return view('peminjaman.edit', compact('peminjaman','barang','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update($id_peminjaman,Request $request)
    {
        $this->validate($request,[
            'id_users' => 'required',
            'id_barang' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
            'status' => 'required',
         ]);
      
         $peminjaman = peminjaman::where($id_peminjaman);
         $peminjaman->id_users = $request->id_users;
         $peminjaman->id_barang = $request->id_barang;
         $peminjaman->tgl_pinjam = $request->tgl_pinjam;
         $peminjaman->tgl_kembali = $request->tgl_kembali;
         $peminjaman->status = $request->status;
         $peminjaman->save();
         return redirect('/peminjaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_peminjaman)
    {
        $peminjaman = peminjaman::find($id_peminjaman);
        $peminjaman->delete();
        return redirect('/peminjaman');
    }
}
