<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Golongan extends Model
{
    use HasFactory;

    public function pelanggan(): HasMany {
        return $this->hasMany(Pelanggan::class);
    }

    protected $guarded = ['id'];
}
