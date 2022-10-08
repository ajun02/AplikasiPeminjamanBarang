<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table ='barang';
    protected $fillable =['nm_barang','kondisi','keterangan','jumlah','jenis','tgl_regis','ruang'];
    protected $primaryKey ='id_barang';
    public function peminjaman()
{
    return $this->hasMany(peminjaman::class, 'id_barang','id_barang');
}

}