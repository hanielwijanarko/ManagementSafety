<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Apar; // Import model Apar

class AparManagement extends Component
{
    public $apars;

    public function mount()
    {
        // Ambil semua data APAR dari database
        $this->apars = Apar::all();
    }

    public function render()
    {
        return view('livewire.apar-management');
    }
}