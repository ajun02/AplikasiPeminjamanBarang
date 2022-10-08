    <!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Masukan Data Pengguna</title>
    </head>
    <table, th, td {
  border: 1px solid black;
  border-collapse: collapse;>
    <body>
    <div class="form-horizontal">
        <div class="panel-body">
            <from method="post" action="users/index">

{{ csrf_field() }}
<div class="form-group">
    <label class="col-sm-2">nama</label>
    <div class="col-sm-10">
        <p>{{ $users->name }}</p>
</div>
</div>
<div class="form-group">
    <label class="col-sm-2">email</label>
    <div class="col-sm-10">
        <p>{{ $users->email }}</p>
</div>
</div>
<div class="form-group">
    <label class="col-sm-2">password</label>
    <div class="col-sm-10">
        <p>{{ $users->password }}</p>
</div>
</div>
<div class="form-gorup">
    <div class="col-sm-offset-2 col-sm-10">
        <a href="/users" class="btn btn-warning">Kembali</a>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>