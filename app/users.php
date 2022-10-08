<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table ='users';
    protected $fillable =['name','email','password'];
    protected $primaryKey ='id_users';
    public function peminjaman()
    {
        return $this->hasMany(peminjaman::class, 'id_peminjaman', 'id_peminjaman');
    }
}
