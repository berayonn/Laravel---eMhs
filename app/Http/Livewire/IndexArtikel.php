<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\index;

class IndexArtikel extends Component
{

    protected $listeners = [
        'indexArtikel'
    ];

    public function render()
    {
        $art = Artikel::orderBy('id', 'desc')->limit(5);
        return view('livewire.index-artikel', ['art' => $art]);
    }

    public function indexArtikel($artikel)
    {
        
    }
}
