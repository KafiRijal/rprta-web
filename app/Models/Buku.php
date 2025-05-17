<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Buku extends Model
{
    protected $table = 'buku';
    protected $fillable = [
        'deskripsi',
        'penulis',
        'penerbit',
        'judul',
        'id_kategori',
        'jumlah',
        'slug',
        'image'
    ];

    public function setJudulAttribute($value)
    {
        $this->attributes['judul'] = $value;
        $this->attributes['slug'] = Str::slug($value, '-');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
