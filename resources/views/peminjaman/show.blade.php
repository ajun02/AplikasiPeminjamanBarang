@extends('layouts.master')

@section('content')
        <div class="container">
            <div class="row">
                <div class=col-sm-12>
                    <div class="panel-head container-fluid" style="margin-to: 10px;">
                   <h1><strong><p>Detail Peminjaman</p></strong></h1>
    </div>
    <div class="form-group">
        <div class="card-body">
            <from method="post" action="peminjaman/index">

{{ csrf_field() }}
<div class="form-group">
    <label class="col-sm-2">tgl_pinjam</label>
    <div class="col-sm-10">
        <p>{{ $users->name }}</p>
</div>
</div>
<div class="form-group">
    <label class="col-sm-2">tgl_pinjam</label>
    <div class="col-sm-10">
        <p>{{ $peminjaman->tgl_pinjam }}</p>
</div>
</div>
<div class="form-group">
    <label class="col-sm-2">tgl_kembali</label>
    <div class="col-sm-10">
        <p>{{ $peminjaman->tgl_kembali }}</p>
</div>
</div>
<div class="form-group">
    <label class="col-sm-2">status</label>
    <div class="col-sm-10">
        <p>{{ $peminjaman->status }}</p>
</div>
</div>
<div class="form-gorup">
    <div class="col-sm-offset-2 col-sm-10">
        <a href="/peminjaman" class="btn btn-warning">Kembali</a>
            </div>
        </div>
    </from>
</div>
</div>
</div>
</div>
</div>
@endsection