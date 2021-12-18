<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pelayanan_produk()
    {
        return $this->belongsTo(PelayananProduk::class);
    }

    public function kelola_orderan()
    {
        return $this->belongsTo(KelolaOrderan::class);
    }

    public function kelola_kain()
    {
        return $this->belongsTo(KelolaKain::class);
    }
}
