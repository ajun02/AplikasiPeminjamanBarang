@extends('layouts.master')

@section('content')
            <div class="card mt-5">
                <div class="card-header text-center">
                     Data Peminjaman - <a href="https://www.malasngoding.com/category/laravel" target="_blank">peminjaman</a>
                </div>
                <div class="card-body">
                    <a href="/peminjaman/create" class="btn btn-primary">Input peminjaman Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <td>Nama Pengguna</td>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Status</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($peminjaman as $i => $p)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $p->users->name }}</td>
                                <td>{{ $p->tgl_pinjam }}</td>
                                <td>{{ $p->tgl_kembali }}</td>
                                <td>{{ $p->status }}</td>
                                <td>
                                    <a href="/peminjaman/edit/{{ $p->id_peminjaman }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    <a href="/peminjaman/detail/{{ $p->id_peminjaman }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    <a href="/peminjaman/hapus/{{ $p->id_peminjaman }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection