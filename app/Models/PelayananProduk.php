<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelayananProduk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kelola_produks()
    {
        return $this->hasMany(KelolaProduk::class);
    }

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}
