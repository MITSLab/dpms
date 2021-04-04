<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $guarded = [];

    public function uoms()
    {
        return $this->belongsToMany('App\Models\Uom');
    }

    public function kategori_produk()
    {
        return $this->belongsTo('App\Models\KategoriProduk');
    }
}
