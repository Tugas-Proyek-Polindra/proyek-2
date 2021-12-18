<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelolaKain extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kelola_produk()
    {
        return $this->hasMany(KelolaProduk::class);
    }

    public function invoice_pemesanan()
    {
        return $this->hasMany(InvoicePemesanan::class);
    }

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}
