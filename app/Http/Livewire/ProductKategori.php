<?php

namespace App\Http\Livewire;

use App\Kategori;
use App\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductKategori extends Component
{
    use WithPagination;

    public $search, $kategori;

    protected $updateQueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount($kategoriId)
    {
        $kategoriDetail = Kategori::find($kategoriId);

        if($kategoriDetail) {
            $this->kategori = $kategoriDetail;
        }
    }

    public function render()
    {
        if($this->search) {
            $products = Product::where('kategori_id', $this->kategori->id)->where('nama', 'like', '%'.$this->search.'%')->paginate(8);
        }else {
            $products = Product::where('kategori_id', $this->kategori->id)->paginate(8);
        }
        
        return view('livewire.product-index', [
            'products' => $products,
            'title' => 'Kategori '.$this->kategori->nama
        ]);
    }
}