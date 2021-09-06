<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    public function products()
        {
        return $this->hasMany(Product::class,
        'product_id', 'id');
        }
        
}
