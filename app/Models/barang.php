<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $primaryKey = 'id_barang';
    protected $fillable = ['kode_barang', 'nama_barang', 'kateogori_barang', 'harga', 'qty'];
}
