@extends('layouts.master')

@section('content')
            <div class="card mt-5">
                <div class="card-header text-center">
                     Data Barang - <a href="https://www.malasngoding.com/category/laravel" target="_blank">barang</a>
                </div>
                <div class="card-body">
                    <a href="/barang/create" class="btn btn-primary">Input barang Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered" id="id_barang" width="100%" ceelspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAMA BARANG</th>
                                <th>JUMLAH</th>
                                <th>JENIS</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($barang as $i=>$p)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $p->nm_barang }}</td>
                                <td>{{ $p->jumlah }}</td>
                                <td>{{ $p->jenis }}</td>
                                <td>
                                    <a href="/barang/edit/{{ $p->id_barang }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    <a href="/barang/detail/{{ $p->id_barang }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    <a href="/barang/hapus/{{ $p->id_barang }}" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
@endsection