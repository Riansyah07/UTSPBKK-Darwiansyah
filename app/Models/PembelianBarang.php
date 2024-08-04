<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'pembelian_barang';

    protected $fillable = [
        'id_pembelian',
        'kode_barang',
        'id_pegawai',
        'tanggal',
        'jumlah',
    ];

    protected $primaryKey = 'id_pembelian';

    public function user(){
        return $this->belongsTo(User::class);
    }
    

}