<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelolaProduk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kelola_kain()
    {
        return $this->belongsTo(KelolaKain::class);
    }

    public function pelayanan_produk()
    {
        return $this->belongsTo(P_ProdukModel::class);
    }
}
