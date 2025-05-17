<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Up2k extends Model
{
    protected $table = 'up2k';
    protected $fillable = [
        'kelurahan',
        'kecamatan',
        'alamat',
        'id_kategori',
        'nama_produk',
        'telepon',
        'perizinan',
        'pemasaran',
        'nama',
        'keterangan',
        'slug',
        'image'
    ];

    public function setNamaProdukAttribute($value)
    {
        $this->attributes['nama_produk'] = $value;
        $this->attributes['slug'] = Str::slug($value, '-');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
