<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\P3k; // Import model P3k

class P3kManagement extends Component
{
    public $p3ks;

    public function mount()
    {
        // Ambil semua data P3K dari database
        $this->p3ks = P3k::all();
    }

    public function render()
    {
        return view('livewire.p3k-management');
    }
}