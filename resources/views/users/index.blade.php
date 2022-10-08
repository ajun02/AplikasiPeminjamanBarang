@extends('layouts.master')

@section('content')
            <div class="card mt-5">
                <div class="card-header text-center">
                     Data Pengguna - <a href="https://www.malasngoding.com/category/laravel" target="_blank">peminjaman</a>
                </div>
                <div class="card-body">
                    <a href="/users/create" class="btn btn-primary">Tambah Data Pengguna</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>nama</th>
                                <th>Email</th>
                                <th>password</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $i=>$p)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->password }}</td>
                                <td>
                                    <a href="/users/edit/{{ $p->id_users }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    <a href="/users/detail/{{ $p->id_users }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    <a href="/users/hapus/{{ $p->id_users }}" class="btn btn-danger"><i class="fa fa-trash" onclick="return confirm('Yakin Hapus?')"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
@endsection