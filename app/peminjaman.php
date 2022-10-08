<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    protected $table ='peminjaman';
    protected $fillable =['id_users','id_barang','tgl_pinjam','tgl_kembali','status'];
    protected $primaryKey ='id_peminjaman';

    public function barang()
    {
        return $this->belongsTo(barang::class, 'id_barang', 'id_barang');
    }
    public function users()
    {
        return $this->belongsTo(users::class, 'id_users', 'id_users');
    }
}

