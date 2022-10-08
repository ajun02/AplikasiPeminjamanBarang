<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tabel Peminjaman</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                     Data peminjaman - <strong>EDIT DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">peminjaman</a>
                </div>
                <div class="card-body">
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/peminjaman/update/{{ $peminjaman->peminjaman }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                        <label>Nama Peminjam</label>
                        <select name="id_users" id="" class="custom-select">
                        @foreach($barang as $p)
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
                            <input type="date" name="tgl_pinjam" class="form-control" placeholder="peminjaman" value=" {{ $peminjaman->tgl_pinjam }}">
 
                            @if($errors->has('tanggal pinjam'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal pinjam')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Tanggal Kembali</label>
                            <input type="date" name="tgl_kembali" class="form-control" placeholder="peminjaman" value=" {{ $peminjaman->tgl_kembali }}">
 
                            @if($errors->has('tanggal kembali'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal kembali')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" name="status" class="form-control" placeholder="peminjaman" value=" {{ $peminjaman->status }}">
 
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
    </body>
</html>