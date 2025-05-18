<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $fillable = ['jabatan'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
