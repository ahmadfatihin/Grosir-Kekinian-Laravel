<?php

namespace App\Http\Livewire;

use App\kategori;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.navbar',[
            'kategoris' => kategori::all()
        ]);
    }
}
