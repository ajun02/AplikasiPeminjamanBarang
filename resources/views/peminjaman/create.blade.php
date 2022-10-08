@extends('layouts.master')
@section('content')
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                     Data peminjaman - <strong>TAMBAH DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">peminjaman</a>
                </div>
                <div class="card-body">
                    <br/>
                    <br/>
                    
                    <form method="post" action="/peminjaman/store">
 
                        {{ csrf_field() }}

                        <div class="form-group">
                        <label>Nama Peminjam</label>
                        <select name="id_users" id="" class="custom-select">
                        @foreach($users as $p)
                            <option value="{{$p->id_users}}">{{$p->name}}</option>
                        @endforeach
                        </select>
                        @if($errors->has('name'))
                            <div class="text-danger">
                            {{ $errors->first('name')}}
                            </div>
                        @endif

                        </div>

                       <div class="form-group">
                        <label>Nama Barang</label>
                        <select name="id_barang" id="" class="custom-select">
                        @foreach($barang as $p)
                            <option value="{{$p->id_barang}}">{{$p->nm_barang}}</option>
                        @endforeach
                        </select>
                        @if($errors->has('nm_barang'))
                            <div class="text-danger">
                            {{ $errors->first('nm_barang')}}
                            </div>
                        @endif

                        </div>

                        <div class="form-group">
                            <label>Tanggal Pinjam</label>
                            <input type="date" name="tgl_pinjam" class="form-control" placeholder="tanggal pinjam"></input>
 
                             @if($errors->has('tgl_pinjam'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_pinjam')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Tanggal Kembali</label>
                            <input type="date" name="tgl_kembali" class="form-control" placeholder="tanggal kembali"></input>
 
 
                             @if($errors->has('tgl_kembali'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_kembali')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" name="status" class="form-control" placeholder="status"></input>
 
                             @if($errors->has('status'))
                                <div class="text-danger">
                                    {{ $errors->first('status')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                            <input type="submit" class="btn btn-primary" value="Kembali">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
@endsection