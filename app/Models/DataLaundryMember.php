<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataLaundryMember extends Model
{
    use HasFactory;

    protected $table = 'datalaundrymember'; // Nama tabel di database
    protected $primaryKey = 'member_id';
    protected $fillable = [
        'no_identitas',
        'nama_member',
        'password',
        'alamat',
        'no_hp',
        'tgl_join',
    ];

    // Relasi ke model Member
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}