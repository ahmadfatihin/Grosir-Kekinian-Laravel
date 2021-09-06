<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function kategori()
        {
        return $this->belongsTo(kategori::class,
        'kategori_id', 'id');
        }

        public function pesanan_details()
        {
        return $this->hasMany(PesananDetail::class,
        'pesanan_id', 'id');
        }
}
