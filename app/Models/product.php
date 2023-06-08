<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $primaryKey = "id_produk";
    protected $fillable = [
        'nama_produk',
        'deskripsi',
        'kategori',
        'img',
        'harga',
        'stok'
    ];

    protected $increment = true;
}
