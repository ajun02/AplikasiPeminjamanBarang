@extends('layouts.master')

@section('content')
            <div class="row">
                <div class=col-sm-12>
                    <div class="panel-head container-fluid" style="margin-to: 10px;">
                    <p>barang</p>
    </div>
    <div class="form-horizontal">
        <div class="panel-body">
            <from method="post" action="barang/index">

{{ csrf_field() }}
<div class="form-group">
    <label class="col-sm-2">Nama Barang</label>
    <div class="col-sm-10">
        <p>{{ $barang->nm_barang }}</p>
</div>
</div>
<div class="form-group">
    <label class="col-sm-2">Kondisi</label>
    <div class="col-sm-10">
        <p>{{ $barang->kondisi }}</p>
</div>
</div>
<div class="form-group">
    <label class="col-sm-2">Keterangan</label>
    <div class="col-sm-10">
        <p>{{ $barang->keterangan }}</p>
</div>
</div>
<div class="form-group">
    <label class="col-sm-2">Jumlah</label>
    <div class="col-sm-10">
        <p>{{ $barang->jumlah }}</p>
</div>
</div>
<div class="form-group">
    <label class="col-sm-2">Jenis</label>
    <div class="col-sm-10">
        <p>{{ $barang->jenis }}</p>
</div>
</div>
<div class="form-group">
    <label class="col-sm-2">Tanggal Regis</label>
    <div class="col-sm-10">
        <p>{{ $barang->tgl_regis }}</p>
</div>
</div>
<div class="form-group">
    <label class="col-sm-2">Ruang</label>
    <div class="col-sm-10">
        <p>{{ $barang->ruang }}</p>
</div>
</div>
<div class="form-gorup">
    <div class="col-sm-offset-2 col-sm-10">
        <a href="/barang" class="btn btn-warning">Kembali</a>
            </div>
        </div>
    </from>
</div>
</div>
</div>
</div>
@endsection