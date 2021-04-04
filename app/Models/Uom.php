<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;

class Uom extends Model
{
    use HasFactory;

    protected $table = 'uom';
    protected $guarded = [];

    public function produks()
    {
        return $this->HasMany('App\Models\Produk');
    }
}
