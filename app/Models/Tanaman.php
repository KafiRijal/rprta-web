<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tanaman extends Model
{
    protected $table = 'tanaman';
    protected $fillable = [
        'nama',
        'deskripsi',
        'manfaat',
        'fakta_unik',
        'slug',
        'image'
    ];

    public function setNamaAttribute($value)
    {
        $this->attributes['nama'] = $value;
        $this->attributes['slug'] = Str::slug($value, '-');
    }
}
