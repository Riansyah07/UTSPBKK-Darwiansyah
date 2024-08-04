<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'harga',
    ];

    protected $primaryKey = 'kode_barang';

    

    public function dataKodeBarang(){
        return $this->hasMany(Barang::class, 'kode_barang');
    }
    
}