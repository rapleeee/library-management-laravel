<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $fillable = [
        'judul_buku',
        'penulis',
        'tahun_terbit',
        'kategori',
        'loan_status',
        'status',
        'jumlah_stok',
        'deskripsi',
    ];

    public function loans()
    {
        return $this->hasMany(pinjamBuku::class);
    }
}
