<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory, Sluggable;
    protected $table = "products";
    protected $primaryKey = "id_produk";
    protected $fillable = [
        'nama_produk',
        'deskripsi',
        'kategori',
        'img',
        'harga',
        'stok',
        'slug'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_produk'
            ]
        ];
    }

    protected $increment = true;

    
}
