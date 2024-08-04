<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'member'; // Nama tabel di database
    protected $primaryKey = 'member_id';
    protected $fillable = [
        'no_identitas',
        'nama_member',
        'password',
        'alamat',
        'no_hp',
        'tgl_join',
    ];

    protected $hidden = [
        'password',
    ];

    /**
     * Set password member yang akan di-hash sebelum disimpan ke database
     *
     * @param string $value
     * @return void
     */

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    
    public function DataLaundryMember()
    {
        return $this->hasMany(Member::class, 'member_id', 'member_id');
    }
}