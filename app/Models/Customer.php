<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primaryKey = 'id_customer';
    protected $guarded = ['id_customer'];
    protected $table = 'table_customer';
    protected $fillable = ['nama_customer','jenis_kelamin','alamat','email','no_telp'];
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
