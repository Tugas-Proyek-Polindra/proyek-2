<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class KelolaOrderan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function invoice_pemesanan()
    {
        return $this->hasMany(InvoicePemesanan::class);
    }

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}
