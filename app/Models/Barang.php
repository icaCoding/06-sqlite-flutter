<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $primaryKey = 'id_barang';
    protected $guarded = ['id_barang'];
    protected $table = 'table_barang';
    protected $fillable = ['nama_barang','harga','deksripsi','stok','gambar'];
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
