<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    public function uom()
    {
        return $this->hasOne(Uom::class, 'id', 'uom_id');
    }

    public function supplier()
    {
        return $this->hasOne(Supplier::class, 'id', 'supplier_id');
    }

    public function kategoriproduk()
    {
        return $this->hasOne(KategoriProduk::class, 'id', 'kategori_produk_id');
    }
}
