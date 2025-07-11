<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Hydrant; // Import model Hydrant

class HydrantManagement extends Component
{
    public $hydrants;

    public function mount()
    {
        // Ambil semua data Hydrant dari database
        $this->hydrants = Hydrant::all();
    }

    public function render()
    {
        return view('livewire.hydrant-management');
    }
}