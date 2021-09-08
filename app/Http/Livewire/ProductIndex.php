<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{   
    use WithPagination;
    public function render()
    {   
        
        $products = Product::paginate(8);
        return view('livewire.product-index', [
            'products' => $products
        ]);
    }
}
