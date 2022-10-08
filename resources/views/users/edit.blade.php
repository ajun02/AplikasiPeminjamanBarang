<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tabel Pengguna</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                     Data Pengguna - <strong>EDIT DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">peminjaman</a>
                </div>
                <div class="card-body">
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/users/update/{{ $users->id_users }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="name" value=" {{ $users->name }}">
 
                            @if($errors->has('name'))
                                <div class="text-danger">
                                    {{ $errors->first('name')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="Email" name="email" class="form-control" placeholder="email" value=" {{ $users->email }}">
 
                            @if($errors->has('email '))
                                <div class="text-danger">
                                    {{ $errors->first('email ')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control" placeholder="password" value=" {{ $users->password }}">
 
                            @if($errors->has('password'))
                                <div class="text-danger">
                                    {{ $errors->first('password')}}
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