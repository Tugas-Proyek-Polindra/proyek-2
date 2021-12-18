<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicePemesanan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class);
    }

    public function kelola_produk()
    {
        return $this->belongsTo(KelolaProduk::class);
    }

    public function orderan()
    {
        return $this->belongsTo(KelolaOrderan::class);
    }
}
