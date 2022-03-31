<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $guarded=['nama_barang'];
    protected $table = 'table_transaksi';
    protected $fillable = ['kode_sewa','nama_customer', 'nama_barang', 'tgl_pinjam','status'];
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
