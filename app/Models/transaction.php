<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;
    protected $table = "transactions";
    protected $primaryKey = "id_transaksi";
    protected $fillable = ['id_produk', 'jumlah'];

    public function product(){
        return $this->hasMany(product::class, 'id_produk');
    }
}
