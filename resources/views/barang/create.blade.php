<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tabel Barang</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                     Data barang - <strong>TAMBAH DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">barang</a>
                </div>
                <div class="card-body">
                    <br/>
                    <br/>
                    
                    <form method="post" action="/barang/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" name="nm_barang" class="form-control" placeholder="nama barang"></input>
 
                             @if($errors->has('nm_barang'))
                                <div class="text-danger">
                                    {{ $errors->first('nm_barang')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Kondisi</label>
                            <input type="text" name="kondisi" class="form-control" placeholder="kondisi"></input>
 
                             @if($errors->has('kondisi'))
                                <div class="text-danger">
                                    {{ $errors->first('kondisi')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" placeholder="keterangan"></input>
 
                             @if($errors->has('keterangan'))
                                <div class="text-danger">
                                    {{ $errors->first('keterangan')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="text" name="jumlah" class="form-control" placeholder="jumlah"></input>
 
                             @if($errors->has('jumlah'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Jenis</label>
                            <input type="text" name="jenis" class="form-control" placeholder="jenis"></input>
 
                             @if($errors->has('jenis'))
                                <div class="text-danger">
                                    {{ $errors->first('jenis')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Tanggal Regis</label>
                            <input type="date" name="tgl_regis" class="form-control" placeholder="tanggal regis"></input>
 
                             @if($errors->has('tgl_regis'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_regis')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Ruang</label>
                            <input type="text" name="ruang" class="form-control" placeholder="ruang"></input>
 
 
                             @if($errors->has('ruang'))
                                <div class="text-danger">
                                    {{ $errors->first('ruang')}}
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